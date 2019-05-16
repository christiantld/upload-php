<?php
include_once 'includes/header.php';
?>

<?php
function uploadImg()
{
  $formatosPermitidos = array('png', 'jpeg', 'jpg', 'gif', 'bmp');
  $extensao = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);

  if (in_array($extensao, $formatosPermitidos)) {
    $pasta = 'files/';
    $temporario = $_FILES['img']['tmp_name'];
    $novoNome = uniqid() . ".$extensao";
    $src = $pasta . $novoNome;

    if (move_uploaded_file($temporario, $pasta . $novoNome)) {
      echo "<img src='$src' style='widht:200px; height:200px; margin:0 20px'>";
    } else {
      echo ' erro';
    }
  }
};

function uploadPdf()
{
  $formatosPermitidos = array('pdf');
  $extensao = pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION);

  if (in_array($extensao, $formatosPermitidos)) {
    $pasta = 'files/';
    $temporario = $_FILES['pdf']['tmp_name'];
    $novoNome = uniqid() . "$extensao";
    $src = $pasta . $novoNome;

    if (move_uploaded_file($temporario, $pasta . $novoNome)) {
      echo " <div style='display:flex; flex-direction:column; margin: 0 20px' ><i class='large material-icons'>arrow_downward</i><a href='$src'>Baixar PDF</a></div>";
    } else {
      echo ' erro';
    }
  }
}
?>
<div class='container'>
  <h4>Arquivos Enviados Com Sucesso</h4>
  <?php
  if (isset($_POST['enviar-img'])) {
    uploadImg();
    uploadPdf();
  }
  ?>

</div>
<?php
include_once 'includes/footer.php';
?>