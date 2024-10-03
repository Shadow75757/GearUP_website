<?php
// Start or resume a session
session_start();

// Include the "connection.php" file
require "connection.php";

// Initialize variables
$email = "";
$name = "";
$uid = "";
$errors = array();

// If user signup button is clicked
if (isset($_POST['signup'])) {
    // Retrieve and sanitize form data
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $uid = mysqli_real_escape_string($con, $_POST['uid']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    // Check if passwords match
    if ($password !== $cpassword) {
        $errors['password'] = "The passwords don't match!";
    }

    // Check if name already exists in the database
    $name_check = "SELECT * FROM usertable WHERE name = '$name'";
    $res = mysqli_query($con, $name_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['name'] = "The name that you have entered already exists!";
    }
    
    // Check if nickname already exists in the database
    $uid_check = "SELECT * FROM usertable WHERE uid = '$uid'";
    $res = mysqli_query($con, $uid_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['uid'] = "The username that you have entered already exists!";
    }

    // Check if email already exists in the database
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "The email that you have entered already exists!";
    }

    // If no errors, proceed with user registration
    if (count($errors) === 0) {
        // Encrypt the password
        $encpass = password_hash($password, PASSWORD_BCRYPT);

        // Insert user data into the database
        $insert_data = "INSERT INTO usertable (name, uid, email, password) VALUES ('$name', '$uid', '$email', '$encpass')";
        $data_check = mysqli_query($con, $insert_data);
    }
}

// If user clicks the login button
if (isset($_POST['login'])) {
    $loginValue = mysqli_real_escape_string($con, $_POST['loginValue']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if email, name, or UID exists in the database
    $check_user = "SELECT * FROM usertable WHERE email = '$loginValue' OR name = '$loginValue' OR uid = '$loginValue'";
    $res = mysqli_query($con, $check_user);

    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
    } else {
        $errors['login'] = "Incorrect email/username/UID or password!";
    }
} else {
    $errors['login'] = "User not found!";
}
?>