<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="ecri_care";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // initializing variables
	$name = $_POST['Name'];
	$emailp = $_POST['Email-p'];
	$addressp = $_POST['Address'];
	$insurance = $_POST['Insurance'];
    $phonep = $_POST['Phone-p'];
    $gender = $_POST['Gender']

	if (isset($_POST['Add'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO ecri_patients (Name, Email-p, Address, Insurance, Phone-p,Gender)
        VALUES ('$name','$emailp' ,'$addressp', '$insurance', '$phonep', '$gender')"); 
		$_SESSION['message'] = "Patient's information saved"; 
		header('location: dashboard.php');
	}else (isset($_POST['Cancel'])){
        header('location: dashboard.php')
    }






    // // Start the session
    // session_start();

    // // Destroy the session
    // session_destroy();

    // // Redirect the user to the login page
    // header('Location: login.php');
    // exit;


    
?>