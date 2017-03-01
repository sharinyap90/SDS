<?php
    include_once 'dbconfig.php';

    if (isset($_POST['submit'])) {

        $spm_no   =   $_POST['spm_no'];
		$year_of_exam     =   $_POST['year_of_exam'];
		$stream_type =   $_POST['stream_type'];
		$name_of_school    =   $_POST['name_of_school'];
		$username = $_POST['matric2'];


        $sql = "INSERT INTO academic (matric_no, spm_no, year_of_exam, stream_type, name_of_school) 
		VALUES ('$username', '$spm_no', '$year_of_exam', '$stream_type', '$name_of_school')";

		$details_arr = ['spm_no'=>$spm_no, 'year_of_exam'=>$year_of_exam, 'stream_type'=>$stream_type, 'name_of_school'=>$name_of_school, 'matric2'=>$username];

		$result = mysql_query($sql, $conn) or die(mysql_error());

        if (mysql_affected_rows())
        {

            echo "<script>alert(\"Successfully Added New Student Entry!\");</script>";
            echo "<script>window.location.assign('studentRegister.php');</script>";
        }

        else
        {
            echo "There is problem during inserting record.";
        }


    }
?>