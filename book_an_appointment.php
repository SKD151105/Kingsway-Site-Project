<?php
include("database.php");
$insert = false;
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $patient_name = $_POST['patient-name'];
    $phone_number = $_POST['phone-number'];
    $email = $_POST['email'];
    $symptoms = $_POST['symptoms'];
    $date = $_POST['date'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $time = $_POST['time'];

    $sql = "INSERT INTO Patient_name (patient_name, phone_number, email, gender, date, department, symptoms, time) 
            VALUES ('$patient_name', '$phone_number', '$email', '$gender', '$date', '$department', '$symptoms', '$time')";

    if (mysqli_query($conn, $sql)) {
        // echo "New record created successfully";
        $insert = true;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Appointment Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(./360_F_579484323_waaeF98BnKROG1Ez3iMVbkavZrPToMut.jpg);
            background-attachment: fixed;
            background-size: cover;
            padding: 20px;
        }

        .form-container {
            margin: auto;
            width: 700px;
            background-color: rgb(67, 103, 185);
            padding: 20px 60px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            margin-bottom: 40px;
            opacity: 0.9;
            box-shadow: 0 0 20px black;
        }

        h1 {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 30px;
            font-size: 40px;
            color: white;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .gender {
            margin: 0%;
            float: left;
        }

        .male {
            bottom: 20px;
            float: left;
        }

        .female {
            float: right;
            width: 40px;
            margin-right: 100px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            font-size: 20px;
        }

        input[type="submit"]:hover {
            background-color: wheat;
            color: black;
            transition-duration: 0.7s;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .class1 {
            display: flex;
        }

        .patientname {
            display: inline-block;
            width: 300px;
        }

        .phone {
            width: 300px;
            margin-left: 100px;
        }

        .class2 {
            display: flex;
        }

        .email {
            display: inline-block;
            width: 300px;
        }

        .symptoms {
            display: inline-block;
            width: 300px;
        }

        .class3 {
            display: flex;
        }

        .date {
            display: inline-block;
            width: 300px;
        }

        .department {
            width: 300px;
            margin-left: 100px;
        }

        .class4 {
            display: flex;
        }

        .gender {
            width: 300px;
            margin-left: 100px;
        }

        .time {
            width: 300px;
            margin-left: 100px;
        }

        .submit {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        #comment {
            text-align: center;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Medical Appointment Form</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="class1">
                <div class="patientname">
                    <div><label for="patient-name">Patient Name:</label><br></div>
                    <input type="text" id="patient-name" name="patient-name" placeholder="Enter your name" required><br>
                </div>

                <div class="phone">
                    <div><label for="phone-number">Phone Number:</label><br></div>
                    <input type="text" id="phone-number" name="phone-number" placeholder="Enter your phone number" required><br>
                </div>
            </div>
            <div class="class2">
                <div class="email">
                    <div><label for="email">Email:</label><br></div>
                    <input type="tel" id="email" name="email" placeholder="Email" required><br>
                </div>

                <div class="gender">
                    <label for="gender">Gender</label><br>
                    <select id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br>
                </div>

            </div>

            <div class="class3">
                <div class="date">
                    <div><label for="date">Select Date:</label><br></div>
                    <input type="date" id="date" name="date" required><br>
                </div>

                <div class="department">
                    <div><label for="department">Department:</label><br></div>
                    <select id="department" name="department" required>
                        <option value="general">General</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dermatology">Dermatology</option>
                        <option value="neurology">Neurology</option>
                    </select><br>
                </div>
            </div>

            <div class="class4">
                <div class="symptoms">
                    <label for="symptoms">Symptoms:</label><br>
                    <textarea id="symptoms" name="symptoms" rows="4" cols="50" required></textarea><br>
                </div>

                <div class="time">
                    <label for="time">Time:</label><br>
                    <input type="time" id="time" name="time" required><br>
                </div>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Make an appointment">
            </div>
            <div>
                <?php
                if ($insert == true) {
                    echo "<p id='comment'>Your appointment has been successfully booked!</p>";
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>