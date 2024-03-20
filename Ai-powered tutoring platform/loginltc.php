<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["fname"]; 
    $password = $_GET["pwd"];  
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ai-powerrd tutorial platform";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $check_sql = "SELECT * FROM exptable WHERE username = '$username' AND password = '$password'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        session_start();
        $_SESSION["username"] = $username;
        header("Location: myaccount.php");
        exit;
    } else {
        echo "<script>alert('Invalid username or password. Please try again.');</script>";
    }
    $conn->close();
}
?>