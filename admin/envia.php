<?php 

include_once('../config/conn.php');
   $stmt = $conection->prepare("INSERT INTO posts (title, description, data, image,texto) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE, :TEXTO)");

   $title = $_POST['title'];
   $data = $_POST['data'];
   $description = $_POST['description'];
   $texto = $_POST['texto'];

   $arquivo = $_FILES['image'];

   move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);

   $image = 'uploads/'.$arquivo['name'];


   $stmt->bindParam(":TITLE", $title);
   $stmt->bindParam(":DESCRIPTION", $description);
   $stmt->bindParam(":DATA", $data);
   $stmt->bindParam(":IMAGE", $image);
   $stmt->bindParam(":TEXTO", $texto);
   $stmt->execute();

   /*redireciona o arquivo */
   header("Location: view2.php");


?>