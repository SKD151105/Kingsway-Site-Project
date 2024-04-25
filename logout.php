<?php
session_start();
session_destroy(); // Destroy all data associated with the current session
header("Location: index.php"); // Redirect to index.php page
exit(); // Ensure that no further code is executed after the header() function call
?>
