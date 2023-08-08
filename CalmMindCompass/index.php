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
        echo '<script>alert("Incorrect E-mail or Password")</script>';
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
                <p>Welcome to Calm Mind Compass
Together, Let's Navigate the Path to Calm Minds.
At Calm Mind Compass, we believe in the transformative power of mental well-being. Our
website is dedicated to providing a safe and supportive space for individuals seeking guidance,
resources, and inspiration to navigate their mental health journey.
At Calm Mind Compass, we believe that mental well-being is essential for everyone, regardless
of age. We are dedicated to promoting awareness, breaking the stigma surrounding mental
health, and providing self-help resources to empower individuals on their journey towards
improved mental well-being.
Our website aims to provide helpful information and resources which help in keeping yourself
mentally healthy.

<!-- <h1>Why Mental Well-being Matters:</h1>
We often focus on improving our physical health. We try to eat healthy, be physically active,etc.
But our mental well-being is a key contributor to our overall health.
Just as physical health is essential, our mental well-being plays an equally significant role in
shaping our overall quality of life. It helps us be more emotionally and mentally resilient. And
good mental health allows us to flourish in various aspects of our lives, even through difficult
times.
 When we fall ill or get physically hurt ,we know what to do,we take medicine or visit the
doctor.But when suffering mentally,most of the people don't know what they should be doing.
This mere fact itself shows how negligible, the society is towards mental well-being.
Mental health affects every aspect of our lives, from our relationships and work performance to
our overall quality of life.
A person with good mental health can effectively cope with the challenges and stressors of life,
form and maintain positive relationships, and achieve a sense of purpose and meaning.
Unfortunately, many people hesitate to open up and share their emotions due to societal
pressure or fear of judgement.
When our mental well-being is compromised, it can lead to various mental health disorders,
affecting our productivity, relationships, and general enjoyment of life.
We aim to change that by creating a safe and supportive space where everyone can freely
express themselves. --> 
        </p>
</div>
    </div>
        </section>
    

    <section class="section-about" id="about">
        <div class="hero">


        <h1>What is mental well being:</h1><p>
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
</p><br><br><br><br><br><br><br>
        </div>
    </section>

    <section class="section-services" id="services">
        <div class="hero">
            <!-- <p>What we offer: Nurturing Mental Well-Being, One step at a time
At Calm Mind Compass, we understand that mental well-being is a journey unique to each
individual. That's why our website is thoughtfully divided into three sections, each tailored to
address the diverse needs of those seeking support and understanding in their mental health
exploration.
The three sections are as follows:
Section 1: Extending a Helping Hand
For those currently experiencing emotional turbulence and seeking help, this section is a
compassionate space where you can find solace and support. We provide a variety of resources
including discussions about your problems,relevant and efficient solutions corresponding to
it,personal experiences and testimonies of people who have suffered and overcome the turmoil
of mental suffering.All the content here is designed to inspire hope and facilitate healing.
Whether you're grappling with anxiety, depression, or overwhelming stress, we're here to extend
a caring hand and guide you towards the path of emotional well-being.
Section 2: Empowering Self-Discovery
Uncertainty about one's mental well-being can be disorienting. This section focuses on offering
a safe space for individuals who are unsure if they are facing mental health challenges. Through
specially curated educational content,self-assessment tools, and informative resources, at Calm
Mind Compass, we empower you to better understand your emotional landscape and act like a
compass needed to navigate you through these uncharted waters.
Section 3: Embracing Genetic Mental Health/Mental Conditions
Mental health conditions that arise from genetic factors can present unique challenges. In our
final section, we embrace individuals who have genetic mental disorders or conditions since
birth. Here, you will find resources moulded to address specific conditions, advice from experts,
and a supportive community that shares similar experiences. Focussing and analysing the
problems faced by them to provide efficient solutions for the same. These also include articles
about the significance and benefits of counselling and how one should approach counselling.
We want people who relate with this section to feel as important as the others and realise that
even though their situations are because of genetic factors, they are worthy and can stand
shoulder-to-shoulder with other individuals</p> -->
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