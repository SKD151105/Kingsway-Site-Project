<?php
session_start(); // Start session for storing login state
include("database.php");
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password (you might want to add more validation)
    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM clients_data WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $username;
                header("Location: index.php"); // Redirect to dashboard or any other page after successful login
                exit();
            } else {
                $error_message = "Incorrect username or password";
            }
        } else {
            $error_message = "User not found";
        }
    } else {
        $error_message = "Please enter both username and password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(./360_F_579484323_waaeF98BnKROG1Ez3iMVbkavZrPToMut.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-shadow: 0px 0px 12px black;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background: #0b82d7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
            transition-duration: 0.7s;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

        .signup-text {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Hospital Login</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <?php if (isset($error_message)) { ?>
                <div class="error-message"><?php echo $error_message; ?></div>
            <?php } ?>
        </form>
        <div class="signup-text">
            <p>If you are not registered, <a href="signup.php">sign up here</a>.</p>
        </div>
    </div>
</body>

</html>