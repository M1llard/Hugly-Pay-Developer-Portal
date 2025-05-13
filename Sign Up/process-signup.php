<?php
include("database.php");
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = filter_input(INPUT_POST, "firstname", FILTER_SANITIZE_SPECIAL_CHARS);
    $surname = filter_input(INPUT_POST, "surname", FILTER_SANITIZE_SPECIAL_CHARS);
    $emailAddress = filter_input(INPUT_POST, "emailaddress", FILTER_SANITIZE_EMAIL);
    $idNumber = $_POST["idnumber"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $cellNumber = $_POST["cellnumber"];
    $physicalAddress = $_POST["physicaladdress"];
    $role = $_POST["role"];
    $department = $_POST["department"];
    $companyName = $_POST["company-name"];
    $companyAddress = $_POST["company-address"];

    $firstname_error = "";
    $surname_error = "";
    $emailAddress_error = "";
    $idNumber_error = "";
    $gender_error = "";
    $dob_error = "";
    $cellNumber_error = "";
    $physicalAddress_error = "";
    $role_error = "";
    $department_error = "";
    $companyName_error = "";
    $companyAddress_error = "";

    if(empty($firstname)){
        $firstname_error = "First name is required";
    }
    elseif(empty($surname)){
        $surname_error = "Second name is required";
    }
    elseif(empty($emailAddress)){
        $emailAddress_error = "Email is required";
    }
    else{
        /*$hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
        mysqli_query($conn, $sql);
        echo "You are now registered!";*/
    }
}

mysqli_close($conn);

?>