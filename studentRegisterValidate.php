<?php

require_once "global_vars.php";
require_once "vendor/phpqrcode/qrlib.php";
require_once "global_service.php";

$citizenship = $_POST['citizenship'];
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "sds";

// Create connection
$conn = new mysqli(HOST, USER, '', DBNAME);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {

	$stud_id = $_POST["stud_id"];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$race = $_POST['race'];
	$religion = $_POST['religion'];
	$state_of_birth = $_POST['state_of_birth'];
	$citizenship = $_POST['citizenship'];
	$state_of_residence = $_POST['state_of_residence'];
	$username = $_POST['matric2'];
	$oku = $_POST['oku'];
	$type_of_dissability = $_POST['type_of_dissability'];
	$height = $_POST['height'];
	$marital_status = $_POST['marital_status'];
	$color_blindness = $_POST['color_blindness'];
	$address = $_POST['address'];
	$poscode = $_POST['poscode'];
	$state = $_POST['state'];
	$tel_no = $_POST['tel_no'];
	$hp_no = $_POST['tel_no'];
	$email = $_POST['email'];

	$sql = "UPDATE student SET gender = '$gender', date_of_birth = '$date_of_birth', race = '$race', religion = '$religion', state_of_birth = '$state_of_birth',  citizenship = '$citizenship', state_of_residence = '$state_of_residence', oku = '$oku', type_of_dissability = '$type_of_dissability', height = '$height', marital_status ='$marital_status', color_blindness = '$color_blindness', address = '$address', poscode='$poscode', state='$state', tel_no = '$tel_no', hp_no = '$hp_no', email = '$email' WHERE matric_no = '$username'";

	if ($conn->query($sql) === true) {
		$results = $conn->query("SELECT * FROM student WHERE matric_no = '$username'");

		// encoding/formatting data into json format
		$data_arr = [];
		$row = $results->fetch_assoc();
		for($i=0; $i<$results->field_count; $i++){
			if($results->fetch_field_direct($i)->name == 'raw')
				continue;
			$data_arr[$results->fetch_field_direct($i)->name] = $row[$results->fetch_field_direct($i)->name];
		}
		$data_arr = json_encode($data_arr);
		//storing the json into database
		$conn->query("UPDATE student SET raw='$data_arr' WHERE matric_no = '$username'");
		//generate QRCode based on the json data
		$path = "assets/img/qrcodes/$username.png";
		QRcode::png($data_arr, $path);//save qrcode to path
		email("[TAJUK EMAIL]", "[TEMPAT KO NAK MEMBEBEL]", ["$email"], [$path]);

		echo "<script>alert(\"Successfully Save Entry!\");</script>";
		echo "<script>window.location.assign('studentRegister.php');</script>";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
}
?>