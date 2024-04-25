<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $enquiry = $_POST['enquiry'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO `enquiry`.`details` (`Name`, `Contact`, `Address`, `Enquiry`, `Feedback`) VALUES ('$name', '$contact', '$address', '$enquiry', '$feedback');";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Enquiry Form</title>
    <link rel="stylesheet" href="enquiry.css">
    <style>
        body {
            background: url(./360_F_579484323_waaeF98BnKROG1Ez3iMVbkavZrPToMut.jpg);
            background-attachment: fixed;
            background-size: cover;
            overflow: hidden;
        }

        .container {
            opacity: 0.9;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Quick Enquiry Form</span></div>
            <form action="enquiry.php" name="myForm" method="post">
                <div class="row">
                    <input type="text" name="name" id="name" placeholder="Name" required>
                </div>
                <div class="row">
                    <input type="text" name="contact" id="contact" placeholder="Email or Phone" required>
                </div>
                <div class="row">
                    <input type="text" name="address" id="address" placeholder="Address" required>
                </div>
                <div class="row">
                    <input type="text" name="enquiry" id="enquiry" placeholder="Enquiry" required>
                </div>
                <div class="row">
                    <input type="text" name="feedback" id="feedback" placeholder="Feedback" required>
                </div>
                <div class="row button">
                    <input type="submit" value="Submit Response">
                </div>
                <div class="signup-link">Back to home page -> &nbsp;<a href="./index.php">Home</a></div>
                <div>
                    <?php
                    if ($insert == true) {
                        echo "<p class='submitMsg'>Thanks for your response! We will get back to you soon.</p>";
                    }
                    ?>
                </div>
            </form>
        </div>

    </div>
</body>

</html>