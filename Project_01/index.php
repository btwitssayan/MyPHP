<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel From</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to Travel From</h3>
        <form action="from.php" method="post">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm your password">
            <input type="submit" value="Sign up">
        </form>
    </div>
</body>
</html>