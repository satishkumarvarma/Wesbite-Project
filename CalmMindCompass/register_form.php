<?php

@include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = ($_POST['password']);
    $cpass = ($_POST['cpassword']);
    
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $select = " SELECT * FROM users WHERE email = '$email' && password = '$hashedPassword'";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'user alredy exist';
    } else {
        if (password_verify($cpass, $hashedPassword)) {
        $insert = " INSERT INTO users(name , email ,password) VALUES('$name','$email','$hashedPassword')";
        mysqli_query($conn ,$insert);
        header('location:index.php');
          } else {
            $error[] = 'passwords did not match';
          } 
    }
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>registration form</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>register now</h3>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>
            <input type="text" name="name" required placeholder="enter your name">
            <input type="email" name="email" required placeholder="enter your email">
            <input type="password" name="password" required placeholder="enter your password">
            <input type="password" name="cpassword" required placeholder="confirm your password">
            <!-- <select name="user_type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select> -->
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>alredy have an account? <a href="index.php">login now</a></p>
        </form>
    </div>

</body>

</html>