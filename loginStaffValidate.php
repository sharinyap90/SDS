<?php
session_start();

	if(!isset($_POST['username']))
		header("Location: studentRegister.php");
	
    $username = $_POST['username'];
    $password = $_POST['password'];
	$_SESSION["username"] = $username;
	
    if ($username && $password)
    {
        $connect = mysql_connect("localhost", "root", "") or die ("Couldn't connect!");
        
        mysql_select_db("sds") or die ("Couldn't foound db!");
        
        $query = mysql_query("SELECT * FROM users WHERE username = '$username'");
        
        $numrows = mysql_num_rows($query);
		$num = mysql_numrows($query);
        
		$i = 0;
        if ($numrows != $i)
        {
           while ($row = mysql_fetch_assoc($query))
           {
			   $user_id = mysql_result($query,$i,"username");
				$_SESSION['user'][$user_id] = $row;
			   
				$staffUser = mysql_result($query,$i,"username");
				$_SESSION["username"] = $staffUser;
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbrole_id = $row['role_id'];
           }
        
            if ($username == $dbusername && $password == $dbpassword && $dbrole_id == 2)
            {
               echo "<script>alert(\"Welcome $staffUser\");</script>";
				echo "<script> window.location.assign('ppaIndex.php'); </script>";
            }
			
			else if ($username == $dbusername && $password == $dbpassword && $dbrole_id == 4)
            {
               echo "<script>alert(\"Welcome $staffUser\");</script>";
				echo "<script> window.location.assign('pkuIndex.php'); </script>";
            }
			
			else if ($username == $dbusername && $password == $dbpassword && $dbrole_id == 5)
            {
               echo "<script>alert(\"Welcome $staffUser\");</script>";
				echo "<script> window.location.assign('bursaryIndex.php'); </script>";
            }
            
            else
			{
                echo "<script>alert(\"Incorrect Username / Password!\");</script>";
				echo "<script> window.location.assign('loginStaff.html'); </script>";
			}
        }
        
        else
		{
            echo "<script>alert(\"Username: '$staffUser' Does Not Exist!\");</script>";
			echo "<script> window.location.assign('loginStaff.php'); </script>";
		}
    }
                                            
    else
        echo "<script>alert(\"Please enter username and password\");</script>";
		echo "<script> window.location.assign('loginStaff.php'); </script>";
?>