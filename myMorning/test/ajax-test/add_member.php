<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Using Ajax with PHP/MySQL
*/

include('config.php');
$pdo = connect();
// adding new member using PDO with try/catch to escape the exceptions
try {
	$sql = "INSERT INTO myMorning (name, mail, pass) VALUES (:name, :mail, :pass)";
	$query = $pdo->prepare($sql);
	$query->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
	$query->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
	$query->bindParam(':pass', $_POST['pass'], PDO::PARAM_STR);
	$query->execute();
} catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}

// list_members : this file displays the list of members in a table view
include('list_members.php');
?>