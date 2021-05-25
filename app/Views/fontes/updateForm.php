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
<h1 style='text-align: center;'>Editar Registro</h1>
<br>


<?php

helper('form');

echo form_open('fontes/update');
$atributosInput = [
    'type' => "text",
    'class' => "form-control"
  ];
  
  $attributes = [
    'class' => "form-label"
  ];
  $usuario = [
    'class' => "form-control",
    'readonly' => "true"
  ];
  $ativar = [
    'type' => "number",
    'class' => "form-control"
  ];



echo form_hidden('id', $id);


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Digite aqui seu nome', 'nome', $attributes);
echo "</b>";
echo form_input('nome', $nome, $atributosInput);
echo '</div>';

echo '<div class="mb-3">';
echo "<b>";
echo form_label('URL do feed', 'url', $attributes);
echo "</b>";
echo form_input('url', $url, $atributosInput);
echo '</div>';


echo '<div class="mb-3">';
echo "<b>";
echo form_label('Deixe um comentário', 'comentario', $attributes);
echo "</b>";
echo form_input('comentario', $comentario, $atributosInput);
echo '</div>';

echo '<div class="mb-3">';
echo "<b>";
echo form_label('Deixe um horário para captacao do feed', 'horario', $attributes);
echo "</b>";
echo form_input('horario', $horario, $atributosInput);
echo '</div>';

echo '<div class="mb-3">';
echo "<b>";
echo form_label('Ativar ou desativar Fonte', 'ativado', $attributes);
echo "</b>";
echo form_input('ativado', $ativado, $ativar);
echo '</div>';

echo '<div class="mb-3">';
echo "<b>";
echo form_label('ultimoUsuario', 'ultimoUsuario', $attributes);
echo "</b>";
echo form_input('ultimoUsuario', 'ultimoUsuario', $usuario);
echo '</div>';

?>

<input type="submit" name="btnEnvia" value="Enviar" class="btn btn-outline-primary"/>

<?php
echo form_close();
 ?>
</div>
</body>
</html>

<?php echo $this->endSection(); ?>