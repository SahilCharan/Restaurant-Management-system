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
}
else{
    header("Location: index.html");
}

// Signup
if(isset($_POST['signup'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (Username, Password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
        header("Location: index.html");
        exit(); // Exit to stop further execution
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();



/*
// Signup
if(isset($_POST['signup'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (Username, Password) VALUES ('$username', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        echo "Signup successful";
        header("action: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
*/
/*
// Login
if (isset($_POST['login'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sql = "SELECT * FROM user WHERE Username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['Password'])) {
            $_SESSION['Username'] = $username;
            echo "Login successful";
            header("Location: index.html"); // Redirect to index.html after login
            exit();
        } else {
            echo "Invalid username or password";
        }
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();*/
?>
