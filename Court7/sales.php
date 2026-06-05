<?php
session_start();
require_once 'db_connect.php';
$filename = basename(__FILE__);
mysqli_query($conn, "INSERT INTO file_logs (filename) VALUES ('$filename')");
if (!isset($_SESSION['admin'])) {
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sales</title>
</head>
<body>

<h1>SALES PAGE</h1>

<a href="index.php">BACK TO HOME PAGE</a>

</body>
</html>