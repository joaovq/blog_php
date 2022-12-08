<?php
include_once('../config/conn.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$texto = $_POST['texto'];

$stmt = $conection->prepare('UPDATE posts SET id = :id, title = :title, description = :description, texto = :texto WHERE id = :id');

$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":texto", $texto);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: view2.php');
?>


