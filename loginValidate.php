<?php
require_once "global_vars.php";

session_start();

	if(!isset($_POST['adminUsername']))
		header("Location: adminIndex.html");

    $username = $_POST['adminUsername'];
    $password = $_POST['adminPassword'];
	$_SESSION["username"] = $username;

    if ($username && $password)
    {
        $connect = mysql_connect(HOST, USER, '') or die ("Couldn't connect!");

        mysql_select_db(DBNAME) or die ("Couldn't find db!");

        $query = mysql_query("SELECT * FROM admin WHERE userName = '$username'");

        $numrows = mysql_num_rows($query);
		$num = mysql_numrows($query);

		$i = 0;
        if ($numrows != $i)
        {
           while ($row = mysql_fetch_assoc($query))
           {
			   $user_id = mysql_result($query,$i,"adminID");
				$_SESSION['user'][$user_id] = $row;

				$adminuser = mysql_result($query,$i,"userName");
				$_SESSION["username"] = $adminuser;
				$dbusername = $row['userName'];
				$dbpassword = $row['password'];
           }

            if ($username == $dbusername && $password == $dbpassword)
            {

                echo "<script>alert(\"Welcome $username.\");</script>";
				echo "<script> window.location.assign('adminIndex.php'); </script>";
            }

            else
			{
                echo "<script>alert(\"Incorrect Username / Password!\");</script>";
				echo "<script> window.location.assign('loginAdmin.html'); </script>";
			}
        }

        else
		{
            echo "<script>alert(\"User Name: '$username' Does Not Exist!\");</script>";
			echo "<script> window.location.assign('index.php'); </script>";
		}
    }

    else
		echo "<script>alert(\"Please enter username and password\");</script>";
		echo "<script> window.location.assign('loginAdmin.html'); </script>";
?>