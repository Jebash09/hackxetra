<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'u319338777_prasu6452', 'Prasurya6451@@', 'u319338777_forum_db');

if(isset($_POST['register_btn'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

    // form validation: ensure that the form is correctly filled
    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $confirm_password) { array_push($errors, "Passwords do not match"); }

    // Check if there are any errors before inserting into the database
    if (count($errors) == 0) {
        // Hash password securely
        $password_hash = md5($password); // Use bcrypt hashing

        // Prepare SQL query to insert the user into the database
        $sql = "INSERT INTO users (name, username, password) VALUES (?, ?, ?)";
        
        // Prepare the statement
        if ($stmt = mysqli_prepare($db, $sql)) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "sss", $name, $username, $password_hash);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                // Set session variables and redirect
                $_SESSION['message'] = "You are now registered";
                $_SESSION['username'] = $username;
                header("location: /d_forum/login.php"); // redirect to home page
                exit();
            } else {
                array_push($errors, "Error registering user. Please try again.");
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            array_push($errors, "Database error. Please try again.");
        }
    }
}

// Display errors (optional, you may want to use this to show errors on the form)
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
