<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sql209.infinityfree.com";
$username = "if0_36013867";
$password = "0UcvhO93kJNSNtO";
$database = "if0_36013867_resturant";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Order Successful</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-image: url('images/login2.jpg'); /* Updated background image path */
                        background-size: cover;
                        background-position: center;
                        margin: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        height: 100vh;
                    }

                    .message-container {
                        text-align: center;
                        background-color: rgba(255, 255, 255, 0.8); /* Adjust the background color opacity as needed */
                        padding: 20px;
                        border-radius: 10px;
                    }

                    h2 {
                        color: #333;
                        font-size: 24px;
                        margin-bottom: 20px;
                    }

                    p {
                        font-size: 18px;
                        margin-bottom: 20px;
                    }

                    .menu-items {
                        display: flex;
                        justify-content: space-around; /* Adjust as needed */
                        background-color: rgba(255, 255, 255, 0.5); /* Translucent background color for the menu items */
                        padding: 15px;
                        border-radius: 8px;
                        margin-top: 20px;
                    }

                    .menu-item {
                        text-align: center;
                        margin: 0 20px;
                    }

                    img {
                        max-width: 100%;
                        height: auto;
                        margin-bottom: 10px;
                        border-radius: 8px; /* Add border-radius for rounded corners */
                        transition: transform 0.2s ease-in-out; /* Add transition for smooth effect */
                    }

                    .menu-item-caption {
                        font-size: 16px;
                        margin-top: 10px;
                    }

                    img:hover {
                        transform: scale(1.1); /* Zoom effect on hover */
                    }

                    a {
                        text-decoration: none;
                        color: #4caf50;
                        font-weight: bold;
                        font-size: 18px;
                    }
                </style>
            </head>
            <body>
                <div class='message-container'>
                    <h2>Order Placed Successfully!</h2>
                    <p>If you'd like to order more, <a href='index.html'>click Here</a>.</p>
                    <div class='menu-items'>
                        <div class='menu-item'>
                            <a href='menu.html'target='_blank'><img src='images/f2.png' alt='Delicious Burger'></a>
                            <p class='menu-item-caption'>Delicious Burger</p>
                        </div>
                        <div class='menu-item'>
                            <a href='menu.html'target='_blank'><img src='images/f3.png' height='230' width='230' alt='Delicious Pizza'></a>
                            <p class='menu-item-caption'>Delicious Pizza</p>
                        </div>
                        <!-- Add more menu items in a similar structure -->
                    </div>
                </div>
            </body>
            </html>";
}

$conn->close();
?>
