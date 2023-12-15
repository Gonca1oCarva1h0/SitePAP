<?php
include './database/db.php';
$emptyUsernameOrPassword = '';



if ($_POST) {

	$tabela = 'users';

	$username = $_POST['username'];
	$password = $_POST['password'];

	//print_r($_POST['password']);
	//echo $_POST['password'];
	if ($username && $password) {
		$password = md5($password);

		$query = "SELECT * FROM $tabela WHERE username=? AND password=?";
		$stmt = $db->prepare($query);
		$stmt->execute([$username, $password]);
		$result = $stmt->fetch();


		//echo (count($result));
		if (count($result) > 0)
		//if($result)
		{
			$_SESSION['username'] = $username;
			$_SESSION['loggedIn'] = true;
			exit(header("Location: menu.php"));
		} else {
			exit(header("Location: index.php "));
		}
	} else {
		$emptyUsernameOrPassword = true;
	}
}
?>