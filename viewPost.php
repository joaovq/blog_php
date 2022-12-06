<?php
include "config/conn.php";
include "nav.php";

$id = $_GET['id'];

$stmt = $conection->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container pt-5">
	<?php foreach ($results as $post) : ?>
		<h1><?= $post['title'] ?></h1>
			<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		<div class="container  text-center">
			<p>
				<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
			</p>
		</div>
		<p><?= $post['description'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>