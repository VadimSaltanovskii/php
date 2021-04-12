<?php
session_start();

$text = $_POST['inputValue'];

$pdo = new PDO("mysql:host=localhost;dbname=study;", "root", "root");

$sql = "SELECT * FROM table_task_9 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$currentTask = $statement->fetch(PDO::FETCH_ASSOC);

if ($currentTask) {
    $message = "Попробуй еще, такое уже есть в базе!";
    $_SESSION['danger'] = $message;
    header("Location: /task_10.php");
    exit;
} else {
    $sql = "INSERT INTO table_task_9 (text) VALUES (:text)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['text' => $text]);
}

$message = "Все ок";
$_SESSION['success'] = $message;

header("Location: /task_10.php");
