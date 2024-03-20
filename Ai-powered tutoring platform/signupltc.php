<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["fname"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ai-powered tutorial platform";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $check_sql = "SELECT * FROM exptable WHERE email = '$email'";
    $check_result = $conn->query($check_sql);
    if ($check_result->num_rows > 0) {
        echo "<script>alert('Email already exists!');</script>";
        echo "<script>setTimeout(function() { window.location.href = 'home.php'; }, 100);</script>";
    } else {
        $insert_sql = "INSERT INTO exptable (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('New record created successfully!');</script>";
            echo "<script>setTimeout(function() { window.location.href = 'home.php'; }, 100);</script>";
            exit;
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
            echo "<script>setTimeout(function() { window.location.href = 'home.php'; }, 100);</script>";
        }
    }
    $conn->close();
}
?>
