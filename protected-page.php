<?php
// Start the session
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protected Page</title>
</head>
<body>
    <h1>Welcome to the Protected Page!</h1>
    <p>This content is only visible to authenticated users.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
