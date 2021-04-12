<?php

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=study;", "root", "root");
$sql = "INSERT INTO table_task_9 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: /task_9.php");
?>
