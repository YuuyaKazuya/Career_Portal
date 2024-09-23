<?php

/** @var yii\web\View $this */

$employmentUrl = Yii::$app->urlManager->createUrl(['portal/index']);


$this->title = 'Career Portal';
?>
<div class="site-index">
    <div class="card" style="background-color: transparent; border: none;">
        <div class="card-body">
            <div class="jumbotron text-center bg-transparent mt-5 mb-5"  style="background-color: rgba(32, 30, 67, 0.9) !important; border-radius: 10px; height: 450px; border: 3px solid darkblue;">
                <br>
                <h1 class="display-4" style="color: white"><b>Welcome to Career Portal</b></h1>
                <br>

                <p class="lead" style="font-size: large;">We are looking for individuals who are passionate, and who thrive in a diverse and high-performance atmosphere.</p>
                <p class="lead" style="font-size: medium;">We provide excellent career opportunities as well as training, and support (including welfare and benefits),</p>
                <p class="lead" style="font-size: medium;">and we believe in bringing out the best in our employees and offer numerous opportunities
                <br>for them to advance in their careers with us.</p>
                <br>

                <div class="text-center mt-5">
                    <a href="<?= htmlspecialchars($employmentUrl, ENT_QUOTES, 'UTF-8') ?>" class="text-decoration-none">
                        <div class="card-wrapper">
                            <div class="card-body" style="border-top: 4px solid white; border-bottom: 4px solid white;">
                                <div class="jumbotron text-center bg-transparent" style="background-color: rgba(173, 216, 230, 0.5) !important; display: flex; align-items: center; justify-content: center;">
                                    <h1 class="title" style="margin: 0; color: white;"><b>Career Dashboard</b></h1>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>       
    </div>

    <style>
        .title {
            font-size: 28px; 
            color: white;
            font-weight: bold;
        }

        .title::after {
            border: none;
            display: none;
        }

        .card-wrapper {
            position: relative;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            /* Adjust size of the card */
            width: 90%; /* Adjust width as needed */
            margin: auto; /* Center the card horizontally */
        }
        
        .card {
            transition: background-color 0.2s ease;
        }
        
        .card-wrapper:active .card {
            background-color: blue; /* Change to red when pressed */
            background-blend-mode: multiply; /* Ensures the color blends with the image */
            transform: scale(0.95); /* Smaller scale effect when pressed */
        }
        
        .card-body {
            transition: background-color 0.2s ease;
        }
        
        .card-wrapper:active .card-body {
            background-color: rgba(110, 172, 218, 0.7) !important; /* Slightly transparent red overlay */
        }
        
        .jumbotron {
            transition: background-color 0.2s ease;
        }

        .jumbotron:active {
            background-color: rgba(110, 172, 218, 0.7) !important; /* Slightly transparent red overlay */
        }

        .display-4{
            font-size: xs-large;
            text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
        }

        .lead {
            color: white;
            font-weight: bold;
        }
    </style>
</div>
