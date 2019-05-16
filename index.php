<?php
include_once 'includes/header.php';
?>
<div class="container">
  <form action="files.php" method="POST" enctype="multipart/form-data">
    <label>Imagem</label>
    <input class="card-panel teal lighten-5" type="file" name="img">
    <br>
    <label>PDF</label>
    <input class="card-panel teal lighten-5" type="file" name="pdf">
    <br>
    <button class="waves-effect waves-light btn-small" value="Enviar" type="submit" name="enviar-img">Enviar</button>
  </form>
</div>
<?php
include_once 'includes/footer.php';
?>