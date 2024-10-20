<?php
// Start the session
session_start();

// Check if the user is already authenticated
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true) {
    header('Location: protected-page.php');
    exit;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace these with your own username and password
    $correctUsername = 'admin';
    $correctPassword = 'Gulfam@91';

    if ($username === $correctUsername && $password === $correctPassword) {
        $_SESSION['authenticated'] = true;
        header('Location: protected-page.php');
        exit;
    } else {
        $error = 'Incorrect username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
