<?php
require_once 'global_vars.php';
session_start();

	if(!isset($_POST['matric']))
		header("Location: studentRegister.php");

    $matric = $_POST['matric'];
    $IC = $_POST['ic'];
	$_SESSION["username"] = $matric;

    if ($matric && $IC)
    {
        $connect = mysql_connect(HOST, USER) or die ("Couldn't connect!");

        mysql_select_db(DBNAME) or die ("Couldn't foound db!");

        $query = mysql_query("SELECT * FROM users WHERE username = '$matric'");

        $numrows = mysql_num_rows($query);
		$num = mysql_numrows($query);

		$i = 0;
        if ($numrows != $i)
        {
           while ($row = mysql_fetch_assoc($query))
           {
			   $user_id = mysql_result($query,$i,"username");
				$_SESSION['user'][$user_id] = $row;

				$studentUser = mysql_result($query,$i,"username");
				$_SESSION["username"] = $studentUser;
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbrole_id = $row['role_id'];
           }

            if ($matric == $dbusername && $IC == $dbpassword && $dbrole_id == 3)
            {
               echo "<script>alert(\"Welcome $studentUser.\");</script>";
				echo "<script> window.location.assign('studentRegister.php'); </script>";
            }

            else
			{
                echo "<script>alert(\"Incorrect Username / Password!\");</script>";
				echo "<script> window.location.assign('loginStudent.php'); </script>";
			}
        }

        else
		{
            echo "<script>alert(\"Matric No: '$matric' Does Not Exist!\");</script>";
			echo "<script> window.location.assign('loginStudent.php'); </script>";
		}
    }

    else
        echo "<script>alert(\"Please enter username and password\");</script>";
		echo "<script> window.location.assign('loginStudent.php'); </script>";
?>