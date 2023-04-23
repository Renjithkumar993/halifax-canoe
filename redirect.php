<?php
session_start();

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$role = $_POST['role'];

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
	
$_SESSION['role'] = $role;

if ($role == 'admin') {
	header('Location: admin.php');
	exit();
} elseif ($role == 'manager') {
	header('Location: manager.php');
	exit();
} elseif ($role == 'ceo') {
	header('Location: ceo.php');
	exit();
}
?>
