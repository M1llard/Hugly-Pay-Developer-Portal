<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Success</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
        <div class="text">
            <div class="image">
                <img src="checkmark_3.png" alt="">
            </div>
            <h2>Success</h2>
            <p class="text-success">You have succesfully registered your account</p>
        </div>
        <form method="post">
            <div class="continue-btn">
                <input type="submit" value="Continue to My Account" name="continue-btn" id="continue-btn">
            </div>
        </form>
        </div>
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

if(isset($_POST['continue-btn'])){
    header("Location: home.php");
}

?>