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
                <title>Booking Successful</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-image: url('images/booking.jpg'); /* Replace with your background image path */
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
                        background-color: rgba(255, 255, 255, 0.5); /* Adjust the background color opacity as needed */
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
                    <h2>Booking Details Added Successfully!</h2>
                    <p>If you have more bookings to add, <a href='book.html' target='_blank'>click HERE</a>.<br>
                        Check our <a href='menu.html' target='_blank'>MENU</a>.   
                    </p>
                </div>
            </body>
            </html>";
}

$conn->close();

/*
// Insert booking details
if (isset($_POST['book'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $persons = mysqli_real_escape_string($conn, $_POST['persons']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);

    $sql = "INSERT INTO booking (`Name`, `Phone Number`, `Email`, `Number of Person`, `Date`) 
            VALUES ('$name', '$phone', '$email', '$persons', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking details added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
*/
?>
