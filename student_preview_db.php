<?php
require_once "global_vars.php";

$con = mysql_connect(HOST,USER,PASSWORD);
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db(DBNAME, $con);
$con = mysql_connect(HOST,USER,PASSWORD);
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db(DBNAME, $con);
//$sql="select * from accountdtl";
$result = mysql_query("select * from accountdtl where account_no='$_POST[name]'");
while($rowval = mysql_fetch_array($result))
 {
$accountnumber= $rowval['account_no'];
$title= $rowval['title'];
$fname= $rowval['fname'];
$lname= $rowval['lname'];
$add1= $rowval['address1'];
$add2= $rowval['address2'];
$town= $rowval['town'];
$country= $rowval['country'];
$pin= $rowval['pcode'];
$mob= $rowval['con_no'];
$mailid= $rowval['mail_id'];
$uname= $rowval['uname'];
$balance= $rowval['balance'];
}
mysql_close($con);

?>