<?php
include('security.php');

if (isset($_POST['btnLogin'])) 
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM register WHERE username = '$user' && password = '$pass'";
	$query_run = mysqli_query($conn, $query);
	$usertype = mysqli_fetch_array($query_run);

	if ($usertype['usertype'] == "admin") 
	{
		$_SESSION['username'] = $user;
		header('Location: index.php');
	}
	else if ($usertype['usertype'] == "user") 
	{
		$_SESSION['username'] = $user;
		header('Location: user-index.php');
	}
	else
	{
		$_SESSION['status'] = "Username and Password don't matched";
		header('Location: login.php');
	}
}

?>