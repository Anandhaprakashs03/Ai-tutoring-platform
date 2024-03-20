<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styleuserprofile.css">
</head>
<body>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    echo "User not logged in.";
    exit();
}
$localhost = "localhost";
$username = "root";
$password = "";
$db_name = "ai-powerrd tutorial platform";
$conn = mysqli_connect($localhost, $username, $password, $db_name);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_SESSION["username"];
$sql = "SELECT * FROM exptable WHERE username='$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "User not found in the database.";
}
mysqli_close($conn);
?>
<div class="container">
    <div class="profile-header">
        <h1>User Profile</h1>
        <p>Welcome, <?php echo $user['username']; ?></p>
    </div>
    <div class="profile-info">
        <h2>User Information</h2>
        <p><span class="label">Username:</span> <?php echo $user['username']; ?></p>
        <p><span class="label">Email:</span> <?php echo $user['email']; ?></p>
    </div>
</div>
</body>
</html>