<?= $this -> extend('tema'); ?>
<?php echo $this ->section('ConteudoPrincipal'); ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Atualizar Noticias</title>
</head>
<body>
<h1 style='text-align: center;'> Atualizar Noticias</h1>

<?php
helper('form');


echo form_open('noticias/update');

$atributosInput = [
    'type' => "text",
    'class' => "form-control",
  
    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'nome'
  ];
  
  
  $attributes = [
    'class' => "form-label"
  ];


echo form_hidden('id', $id);




echo '<div class="mb-3">';
echo "<b>";
echo form_label('Titulo Noticia', 'titulo', $attributes);
echo "</b>";
echo form_input('titulo', $titulo, $atributosInput);
echo '</div>';

echo '<div class="mb-3">';
echo '<b>';
echo form_label('Link da Noticia', 'link', $attributes);
echo '</b>';
echo form_input('link', $link, $atributosInput);
echo "</div>";


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Ultimo Usuario', 'ultimoUsuario', $attributes);
echo "</b>";
echo form_input('ultimoUsuario', $ultimoUsuario, $atributosInput);
echo "</div>";

?>


<input type="submit" name="btnEnvia" value="Atualizar" class="btn btn-outline-primary"/>



<?php
echo form_close();
?>
    </div>
</body>
</html>


<?= $this->endSection(); ?>

