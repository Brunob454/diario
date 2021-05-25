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
<h1 style='text-align: center;'>Adicioanr Fontes</h1>
<br>

<?php
helper('form');

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
  $usuario = [
    'class' => "form-control",
    'placeholder' => "ultimoUsuario",
    'name' => "nome",
    'id' => 'nome'
  ];

  $ativar = [
    'type' => "number",
    'class' => "form-control",
  
    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'nome'
  ];

echo form_open('fontes/createBe');


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Digite aqui seu nome', 'nome', $attributes);
echo "</b>";
$atributosInput['id'] = "nome";
$atributosInput['name'] = "nome";
$atributosInput['placeholder'] = "Digite aqui seu nome";

echo form_input($atributosInput);
echo "</div>";



echo '<div class="mb-3">';
echo "<b>";
echo form_label('URL do feed', 'url', $attributes);
echo "</b>";
$atributosInput['id'] = "url";
$atributosInput['name'] = "url";
$atributosInput['placeholder'] = "URL do feed";

echo form_input($atributosInput);
echo "</div>";


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Deixe um comentário', 'comentario', $attributes);
echo "</b>";
$atributosInput['id'] = "comentario";
$atributosInput['name'] = "comentario";
$atributosInput['placeholder'] = "Deixe um comentário";

echo form_input($atributosInput);
echo "</div>";


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Deixe um horário para captacao do feed', 'horario', $attributes);
echo "</b>";
$atributosInput['id'] = "horario";
$atributosInput['name'] = "horario";
$atributosInput['placeholder'] = "Deixe um horário para captacao do feed";

echo form_input($atributosInput);
echo "</div>";


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Ativar ou desativar Fonte', 'ativado', $attributes);
echo "</b>";
$ativar['id'] = "ativado";
$ativar['name'] = "ativado";
$atrivar['placeholder'] = "Ativar ou desativar Fonte";

echo form_input($ativar);
echo "</div>";


echo '<div class="mb-3">';
echo "<b>";
echo form_label('ultimoUsuario', 'ultimoUsuario', $attributes);
echo "</b>";
$atributosInput['id'] = "ultimoUsuario";
$atributosInput['name'] = "ultimoUsuario";
$atributosInput['placeholder'] = "ultimoUsuario";

echo form_input($usuario);
echo "</div>";


echo '<br>';
?>

<input type="submit" name="btnEnvia" value="Enviar" class="btn btn-outline-primary" />

<?php
echo form_close();
 ?>
   </div>
</body>
</html>
<?php echo $this->endSection(); ?>