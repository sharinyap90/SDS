<?php
    include_once 'dbconfig.php';
    
    if (isset($_POST['submit'])) {
	
        $staffUser		=   $_POST['staffUser'];
		$staffPassword	=   $_POST['staffPassword'];
		$staffPosition	=   $_POST['position'];
        
    
        $sql = "INSERT INTO users (username, password, role_id) 
		VALUES ('$staffUser', '$staffPassword', '$staffPosition')";
        
		$result = mysql_query($sql, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {
            
            echo "<script>alert(\"Successfully Added New Staff Entry!\");</script>";
            echo "<script>window.location.assign('addStaff.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }
		
		
    }
?>