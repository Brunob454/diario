<?php echo $this -> extend('tema'); ?>
<?php echo $this ->section('ConteudoPrincipal'); ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<h1 style='text-align: center;'>Deletar Registro</h1>
<?php


helper('form');


echo "<br>";
echo form_open('fontes/deleteFonte');

echo form_hidden('id', $id);



$attributes = [
    'class' => "form-label"
  ];
$atributosInput = [
    'type' => "text",
    'class' => "form-control",
    'readonly' => 'true',
    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'disabledTextInput'
  ];
  
  
  

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
echo "</b>";
echo form_label('Ativar ou desativar Fonte', 'ativado', $attributes);
echo "</b>";
echo form_input('ativado', $ativado, $atributosInput);
echo '</div>';


echo '<div class="mb-3">';
echo "<b>";
echo form_label('ultimoUsuario', 'ultimoUsuario', $attributes);
echo "</b>";
echo form_input('ultimoUsuario', 'ultimoUsuario', $atributosInput);
echo "</div>";


echo form_label('Tem certeza de que deseja Excluir?', 'confimacao', $attributes);
?>

<input type="submit" name="Sim" value="Sim" class="btn btn-outline-primary"/>
<input type="submit" name="Nao" value="Nao" class="btn btn-outline-danger"/>



<?php
echo form_close();
?>
    </div>
</body>
</html>

<?php echo $this->endSection(); ?>
