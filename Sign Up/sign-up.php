<?php
session_start();
include("database.php");
include("functions.php");

$user_data = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form class="form" id="form" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <p class="head">Hugly Pay Developer Portal</p>
            <div class="personal-details">
                <p class="sub-header">Personal Details</p>
                <p class="firstname" id="label">First Name</p>
                <input type="text" id="firstname" name="firstname" class="user-input" required>
                <p class="surname" id="label">Surname</p>
                <input type="text" id="surname" name="surname" class="user-input" required>
                <p class="email-address" id="label">Email Address</p>
                <input type="email" id="email-address" name="emailaddress" class="user-input" required>
                <p class="id-number" id="label">ID Number</p>
                <input type="text" id="id-number" name="idnumber" maxlength="11" class="user-input" required>
                <p class="gender" id="label">Gender</p>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <p class="dob" id="label">Date of Birth</p>
                <input type="date" id="dob" name="dob" class="user-input" required>
            </div>
            <div class="contact-details">
                <p class="sub-header">Contact details</p>
                <p class="cell-number" id="label">Cellphone Number</p>
                <input type="tel" required pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" id="cell-number" name="cellnumber" class="user-input">
                <p class="password" id="label">Physical Address</p>
                <input type="text" name="physicaladdress" id="physical-address" class="user-input" required>
            </div>
            <div class="organisation-dtls">
                <p class="sub-header">Organisation Details</p>
                <p class="role" id="label">Role</p>
                <input type="text" name="role" id="rolename" class="user-input" required>
                <p class="department" id="label">Department</p>
                <input type="text" name="department" id="department" class="user-input" required>
                <p class="company-name" id="label">Company Name</p>
                <input type="text" name="company-name" id="companyname" class="user-input" required>
                <p class="company-address" id="label">Company Address</p>
                <input type="text" name="company-address" id="companyaddress" class="user-input" required>
            </div>
            <div class="tandcs">
                <input type="checkbox" name="tandcs" id="tandcs">
                <label class="tandcs1">I accept the <a href="">terms</a> &amp; <a href="">conditions</a></label>
            </div>
            <div class="register-btn">
                <input type="submit" value="Register" class="register">
            </div>
            <div class="sign-up">
                <p>Already have an account?<a href=""> Log in</a></p>
            </div>
        </form>
    </div>
    <div class="footer">
        <footer>
            <p>Terms & Conditions  |  Privacy Policy  |  Manage Cookies</p>
            <p>&copy; Copyright 2024 Hugly Group (Pvt) Ltd</p>
        </footer>
    </div>
</body>
</html>

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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_id = random_num(20);
        $sql_query = "INSERT INTO sign_up (firstName, surname, emailAddress, idnumber, gender, dob, cellNumber, physicalAddress, rolename, department, companyName, companyAddress)
                      VALUES ('$user_id','$firstname', '$surname', '$emailAddress', '$idNumber', '$gender', '$dob', '$cellNumber', '$physicalAddress', '$role', '$department', '$companyName', '$companyAddress')";
        mysqli_query($conn, $sql_query);
        header("Location: sign-up-success.html");
    }

    mysqli_close($conn);
}

?>
