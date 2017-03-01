<?php
    include_once 'dbconfig.php';
    
    if (isset($_POST['submit'])) {
	
        $studname   =   $_POST['studname'];
		$studic     =   $_POST['studIC'];
		$studmatric =   $_POST['studMatric'];
		$program    =   $_POST['program'];
		$faculty    =   $_POST['faculty'];
        
    
        $sql = "INSERT INTO student (role_id, matric_no, nric, fullname, program, faculty) 
		VALUES (3, '$studmatric', '$studic', '$studname', '$program','$faculty')";
		
		$sql1 = "INSERT INTO users (role_id, username, password) 
		VALUES (3, '$studmatric', '$studic')";
        
		$result = mysql_query($sql, $conn) or die(mysql_error());
		$result1 = mysql_query($sql1, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {
            
            echo "<script>alert(\"Successf5ully Added New Student Entry!\");</script>";
            echo "<script>window.location.assign('addStudent.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }
		
		
    }
?>