<?php echo $this -> extend('tema'); ?>
<?php echo $this ->section('ConteudoPrincipal'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Noticias</title>
</head>
<body>
<h1 style='text-align: center;'> Noticias</h1>




<?php
helper('form');


echo form_open('noticias/inserir');

$atributosInput = [
    'type' => "text",
    'class' => "form-control",
  
    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'nome'
  ];
  
  
  $attributes = [
    'class' => "form-label",
  ];

  $ultiUsu = [
      'class' => "form-control",
      'readonly' => "true"
  ];

echo '<br>';

echo '<div class="mb-3">';
echo "<b>";
echo form_label('Titulo Noticia', 'titulo', $attributes);
echo "</b>";

$atributosInput['id'] = "titulo";
$atributosInput['name'] = "titulo";
$atributosInput['placeholder'] = "Digite aqui o titulo da noticia";

echo form_input($atributosInput);
echo "</div>";

echo '<div class="mb-3">';
echo "<b>";
echo form_label('Link da Noticia', 'link', $attributes);
echo "</b>";

$atributosInput['id'] = "link";
$atributosInput['name'] = "link";
$atributosInput['placeholder'] = "Digite aqui o link da noticia";

echo form_input($atributosInput);
echo "</div>";


echo '<div class="mb-3"';
echo form_label('Ultimo Usuario', 'ultimoUsuario', $attributes);
echo form_input('ultimoUsuario', 'ultimoUsuario', $ultiUsu);
echo "</div>";
?>

<input type="submit" name="btnEnvia" value="Enviar" class="btn btn-outline-primary"/>


<?php
echo form_close();
?>
    
</body>
</html>

<?php echo $this->endSection(); ?>