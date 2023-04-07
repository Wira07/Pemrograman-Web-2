<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
   
</head>

<body>
    <div class="container" style="font-family: Arial, Helvetica, sans-serif;">

        <h2>Login Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username == "admin" && $password == "12345") {
                session_start();
                $_SESSION["username"] = $username;
                header('Location: welcome.php');
            } else {
                echo "Username or password is incorrect";
            }
        }
        ?>
    </div>
</body>

</html>