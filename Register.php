
    <?php
    // ini_set('display_errors', 0);
    // error_reporting(E_ERROR | E_WARNING | E_PARSE); 
    
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="ecri_care";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form data
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $username = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['CPassword'];
    $phonenumber = $_POST['Phone_nr'];




    //Validates password & confirm passwords.
    // if(!empty($_POST["Password"]) && ($_POST["Password"] == $_POST["CPassword"])) {
    //     $password = $_POST["Password"];
    //     $cpassword = $_POST["CPassword"];
    //     if (strlen($_POST["Password"]) <= '8') {
    //         $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    //         // header('Location: reg.php?err='.$passwordErr);
    //     }
    //     elseif(!preg_match("#[0-9]+#",$password)) {
    //         $passwordErr = "Your Password Must Contain At Least 1 Number!";
    //     }
    //     elseif(!preg_match("#[A-Z]+#",$password)) {
    //         $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    //     }
    //     elseif(!preg_match("#[a-z]+#",$password)) {
    //         $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    //     } else {
    //         // $passwordErr = "ok";
    //         $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
    //     }
    // }




    // //Given password
    // $password='user-input-pass';

    // //Validate password strength
    // $uppercase = preg_match('@[A-Z]@', $password);
    // $lowercase = preg_match('@[a-z]@', $password);
    // $number    = preg_match('@[0-9]@', $password);
    // $specialChars = preg_match('@[^\w]@', $password);


    // if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    //     echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    // }else{
    //     echo 'Strong password.';
    // }

    // Create the insert query
    $sql = "INSERT INTO ecri (FirstName, LastName, UserName, Email, Password,CPassword, Phone_nr) 
    VALUES ('$firstname','$lastname','$username','$email', '$password', '$cpassword','$phonenumber')";


    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header('Location: dashboard.html');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
    ?>