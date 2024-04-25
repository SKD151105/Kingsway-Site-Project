<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn =mysqli_connect($db_server,$db_user,$db_pass,$db_name);
    include('database.php');
    $sql = "SELECT * FROM clients_data";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['username'] . "  ". $row['id'] . "<br>";
        }
    } else {
        echo "No users found";
    }
    ?>
</body>
</html>
