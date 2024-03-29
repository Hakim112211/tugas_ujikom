<?php
require_once('./db/DB_connection.php');
require_once('./db/DB_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCEAN | Login</title>
    <link rel="icon" href="./assets/images/ocean.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/style/login.css">
</head>
<body>
    <div class="container">
        <img style="width: 100px; margin-bottom: 2rem;" src="https://images-platform.99static.com//xDAc3S0xMhjZf7WJikzFFxpdUGs=/81x26:905x850/fit-in/500x500/99designs-contests-attachments/90/90870/attachment_90870812" alt="btr">
        <form method="POST">
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php endif; ?>
            <div class="text-center">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Username" required>
            </div>

            <div class="text-center">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="**********">
            </div>
            <div>
            <div class="text-center">
                <button type="submit">Sign In</button>
            </div>
            <div class="text-center mt-4">
                 <p>Don't have an account? <a href="./pages/register.php">Register here</a></p>
            </div>
        </form>
    </div>
</body>
</html>