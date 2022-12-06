<!-- início card -->
<div class="container" id="cards">
		<div class="row row-cols-1 row-cols-md-3 g-4">
		<?php foreach($results as $post): ?>
		  <div class="col gy-5">
		    <div class="card">
		      <img src="<?=$post["image"] ?>" class="card-img-top" alt="...">
		      <div class="card-body">
		        <h5 class="card-title">
<?= $post["title"] ?>
        </h5>
		        <p class="card-text">
<?= $post["description"] ?>
         </p>
		        <a href="viewPost.php?id=<?= $post["id"] ?>">
					<ion-icon name="eye-outline" size="large"></ion-icon>
        		</a>
		      </div>
		    </div>
		  </div>
		  <?php endforeach; ?>
	</div>
</div>
	<!-- fim card -->
