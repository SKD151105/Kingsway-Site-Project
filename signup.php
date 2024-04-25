
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Signup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(./360_F_579484323_waaeF98BnKROG1Ez3iMVbkavZrPToMut.jpg);
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }
        .signup-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 12px black;
            width: 800px; /* Increased width */
            margin-top: 30px;
            margin-bottom: 30px;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #0b82d7;
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
        .login-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Hospital Signup</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="pincode" placeholder="Pincode" required>
            <input type="text" name="mobile_number" placeholder="Mobile Number" required>
            <input type="text" name="alternate_mobile_number" placeholder="Alternate Mobile Number" required>
            <input type="text" name="age" placeholder="Age" required>
            <input type="text" name="gender" placeholder="Gender" required>
            <input type="text" name="occupation" placeholder="Occupation" required>
            <select name="blood_group" required>
                <option value="" disabled selected>Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <input type="submit" name="submit" value="Signup" id="signup">
        </form>
        <div class="login-link">
            <p>If you are registered, <a href="login.php">log in here</a>.</p>
        </div>
    </div>
    <!-- <script src="./signup.js"></script> -->
</body>
</html>
<?php
include("database.php");

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypt_password=password_hash($password,PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $mobile_number = $_POST['mobile_number'];
    $alternate_mobile_number = $_POST['alternate_mobile_number'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $blood_group = $_POST['blood_group'];

    $sql = "INSERT INTO clients_data (username, password, address, city, pincode, mobile_number, alternate_mobile_number, age, gender, occupation, blood_group) 
            VALUES ('$username', '$encrypt_password', '$address', '$city', '$pincode', '$mobile_number', '$alternate_mobile_number', '$age', '$gender', '$occupation', '$blood_group')";
    mysqli_query($conn, $sql);
    // if (mysqli_query($conn, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . mysqli_error($conn);
    // }
}

mysqli_close($conn);
?>