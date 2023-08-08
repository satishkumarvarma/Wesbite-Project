<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <link rel="stylesheet" href="card2.css">
</head>
<body>
    <div class="grid">
        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header">Category1</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quisquam fuga sapiente ducimus veniam facilis dolores unde necessitatibus eaque distinctio sequi, reprehenderit a! Reiciendis itaque ad natus, obcaecati incidunt eaque.
                    </p>
                    <a class="card-btn" href="click.Php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header">Category2</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quisquam fuga sapiente ducimus veniam facilis dolores unde necessitatibus eaque distinctio sequi, reprehenderit a! Reiciendis itaque ad natus, obcaecati incidunt eaque.
                    </p>
                    <a class="card-btn" href="click.php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

        <div class="grid-items">
            <div class="card">
                <img class="card-img" src="img/mentalHealth.jpg" alt="MentalHealth">
                <div class="card-content">
                    <h1 class="card-header">Category3</h1>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quisquam fuga sapiente ducimus veniam facilis dolores unde necessitatibus eaque distinctio sequi, reprehenderit a! Reiciendis itaque ad natus, obcaecati incidunt eaque.
                    </p>
                    <a class="card-btn" href="click.php">Read More <span>&rarr;</span></a>
                </div>
            </div>
        </div>

    
    </div>
</body>
</html>