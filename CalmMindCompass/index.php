<?php

@include 'config.php';

session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
  
    $userEnteredPassword = $_POST['password'];
  
    // echo $email."<br>".$userEnteredPassword ."<br>";
  
    // Escape the admission number to prevent SQL injection (if not using prepared statements)
  $escaped_ad_num = mysqli_real_escape_string($conn, $email);
  
    // Construct the SQL query
    $sql = "SELECT name, password FROM users WHERE email = '$escaped_ad_num'";
  
    // Execute the query
    $result = mysqli_query($conn, $sql);
    // Retrieve the hashed password from the database
  
    // Check if the query was successful
    if ($result) {
      // Fetch the password (assuming there is only one matching record)
     
      $row = mysqli_fetch_assoc($result);
      $storedHashedPassword = $row['password'];
    
      // Now you have the hashed password in $storedHashedPassword variable
        
      if (password_verify($userEnteredPassword, $storedHashedPassword)) {
        // echo " sql query fectch successful , authrntication successfyl "."<br>";
        $_SESSION['admin_name'] = $row['name'];
        header('location:card2.php');
        
      } else {
        //sql query fectch successful , authrntication faild
        $error[] = 'incorrect email or password!';
        echo '<script>alert("Incorrect Admission num or password .Pls try again")</script>';
      } 
      
    } else {
      // Query failed
      echo '<script>alert("can not fetch details at this moment")</script>';
    }
   
  mysqli_close($conn);  
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calm mind Compass</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
     <!-- header section starts -->
     <header class="header">
        <!-- <img src="img/cmclogo.jpg" class="logo"> -->
        <a href="#" class="logo">Calm mind Compass</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        </div>
        <!-- <input type="email" placeholder="your gmail" class="box"> -->

        <form action="" method="post" class="login-form">
        <?php
            if (isset($error)) {
                foreach ($error as $error) {

                    echo '<span class="error-msg">' . $error . '</span>';
                };      
            };
            ?>
            <h3>login now</h3>
            <input type="email"  name="email"  required placeholder="enter email" class="box">
            <input type="password" name="password" required placeholder="enter your password" class="box">
            <input type="submit" name="submit" value="login now" class="btn">
            <p>don't have an account? <a href="register_form.php">register  now</a></p>

        </form>


    </header>
         
    <!-- Main section starts here -->
    <main>
        <section class="section-hero" id="home">
            <div class="hero">
                <div>
                <p>What is mental well being:
Mental well-being encompasses psychological, emotional, and social health. It refers to how we
move through life and react to its turbulence. These fluctuations can range from everyday
stressors to significant life shifts.
Our mental well-being informs the details of our life. This includes how we make friends and
socialise, how we manage stress, and the choices we make in response to everyday situations
of life.
Mental well-being is concerned with those not suffering from mental illness. It focuses on those
who could get better at being the best version of themselves and live a more meaningful life.
Mental well-being is not merely the absence of mental illness; rather, it is a state of emotional
and psychological strength.
Psychological health encompasses self-esteem, self-acceptance, and a positive outlook on life.
It is about understanding ourselves, our strengths, weaknesses, and growth areas, and working
towards personal development and self-improvement.
Striking a balance between work or academic commitments and personal life is crucial for
mental well-being. Overworking or excessive stress in professional settings can lead to burnout
and negatively impact mental health.
</p></div>
    </div>
        </section>
    

    <section class="section-services" id="about">
        <div class="hero">
            <p>About</p>
        </div>
    </section>

    <section class="section-services" id="services">
        <div class="hero">
            <p>service section</p>
        </div>
    </section>
    <footer>
  <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
       <a href="mailto:satish@gmail.com">satish@gmail.com</a></p>
       <p>© 2018 Gandalf</p>
    </footer>

    </main>
    <!-- JavaScript section starts here -->

    <script src="script.js"></script>


</body>
</html>