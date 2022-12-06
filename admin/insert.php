<?php

include "../config/conn.php";
include "session.php";
include "header.php";


echo "<br>";

?>


<form action="envia.php" method="post" enctype="multipart/form-data">
<div class="container pt-3 pb-3">
  <div>
    <h1>Inserir</h1>
  </div>
<label for="basic-url" class="form-label">Título</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" name="title" id="title" aria-describedby="basic-addon3" placeholder="Digite o título" required>
</div>
<label for="data" class="form-label">Data</label>
<div class="input-group mb-3">
<input type="date" class="form-control" name="data" id="data" aria-describedby="basic-addon3" placeholder="dd/mm/yyyy" required>
</div>
<label for="myTextarea" class="form-label">Texto descritivo</label>
<div class=" mb-3">
  <textarea id="myTextarea" name="description" aria-label="With textarea" placeholder="Digite a descrição da imagem..."></textarea>
</div>
<div class="input-group mb-3">
<input type="file" class="form-control" id="formGroupExampleInput3" name="image" placeholder="Insira uma imagem" name="image"/>
</div>

<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Publicar</button>
  </div>
</div>
</form>
<?php 

include "footer.php";

?>