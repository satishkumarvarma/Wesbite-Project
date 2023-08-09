<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish and Responsive Yoga Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f3f3f3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            border-radius: 50%;
            max-width: 100px;
            height: auto;
        }

        .intro {
            text-align: justify;
            margin-bottom: 20px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            flex: 0 0 calc(25% - 20px);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin: 10px;
            overflow: hidden;
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px 5px 0 0;
        }

        .card .container {
            padding: 10px;
        }

        .card h4 {
            margin: 0;
        }

        #logout{
            border: 2px solid black;
            border-radius: 10px;
            display: inline-block;
            color: black;
            padding: 15px;
            margin-left: 850px;
            cursor: pointer;
        }

        #logout:hover{
            background-color: rgb(154, 168, 168);
            font-size: larger;
        }

        @media only screen and (max-width: 800px) {
            .header h1 {
                font-size: 24px;
            }
            /* .video-container{
                width:250px;
            } */
            .intro p {
                font-size: 14px;
            }

            .card {
                flex: 0 0 calc(33.33% - 20px);
            }
             #logout{
                margin-left:600px;
            } 
        }
        /* @media only screen and (max-width: 800px) {
            #logout{
                margin-left:500px;
            } 
        }
        @media only screen and(max-width:414px){
            .header h1 {
                font-size: 20px;
            }

            .intro p {
                font-size: 12px;
            }

            .card {
                flex: 0 0 calc(33.33% - 20px);
            }
            #logout{
                margin-left: 260px;
            }
        } */

        @media only screen and (max-width: 378px) {
    #logout{
                margin-left: 100px;
            }
}
        @media only screen and (min-width: 800px) {
    #logout{
                margin-left: 770px;
            }
}

         /* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
    #logout{
                margin-left: 260px;
            }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (min-width: 600px) {
    #logout{
                margin-left: 490px;
            }
}

/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) {
    #logout{
                margin-left: 650px;
            }
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 992px) {
    #logout{
                margin-left: 870px;
            }
}

/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (min-width: 1200px) {
    #logout{
                margin-left: 1000px;
            }
}


        /* Responsive layout for even smaller screens */
        @media only screen and (max-width: 600px) {
            .card {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <img src="https://media.istockphoto.com/id/1355037936/photo/shot-of-a-young-businessman-looking-stressed-while-working-in-a-modern-office.jpg?s=1024x1024&w=is&k=20&c=keYWImA78TOzpWKgsjdtrqe5Y-XndPPrZAPjMuWbuj8=" alt="alternatetext"> -->
            <a href="logout.php" ><span id="logout">logout</span></a>
            <h1>Stylish and Responsive Yoga Website2</h1>
            
        </div>
        <div class="intro">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sint amet itaque quidem accusantium explicabo quasi, error, libero deserunt sunt iste nulla porro? Sint quae in voluptatibus minima asperiores esse ea. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque dolorem quae voluptate eligendi excepturi eos vitae. Sunt voluptatum non modi ut! Sequi labore nobis inventore, harum voluptatibus soluta nemo tempore cumque? Illo quisquam molestiae voluptates sunt quo commodi, placeat culpa.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nostrum non eligendi neque illum aut inventore, quibusdam, dignissimos totam deleniti quidem.</p>
        </div>
        <div class="video-container">
            <iframe width="350" height="250" src="https://www.youtube.com/embed/CQjGqtH-2YI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="cards">
            <div class="card">
                <img src="img/yoga1.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga2.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga4.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga5.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga6.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga7.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga8.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <div class="card">
                <img src="img/yoga9.jpeg" alt="Pose 1">
                <div class="container">
                    <h4><b>POSE</b></h4>
                    <p>CONTENT</p>
                </div>
            </div>
            <!-- Add more cards for other yoga poses here -->
        </div>
        
    </div>
</body>

</html>
