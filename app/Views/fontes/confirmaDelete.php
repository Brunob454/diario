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
<h1 style='text-align: center;'>Fontes</h1>



<div style="text-align: center">



<?php


helper('form');


echo "<br>";
echo form_open('fontes/deleteFonte');

echo form_hidden('id', $id);
$attributes = [
    'class' => 'labels',
    'style' => 'color: Blue'
];


echo form_label('Digite aqui seu nome', 'nome', $attributes);
echo "<br>";



echo form_input('nome', $nome);
echo '<br>';
echo '<br>';



echo form_label('URL do feed', 'url', $attributes);
echo '<br>';


echo form_input('url', $url);
echo '<br>';
echo '<br>';



echo form_label('Deixe um comentário', 'comentario', $attributes);
echo '<br>';

echo form_input('comentario', $comentario);
echo '<br>';
echo '<br>';


echo form_label('Deixe um horário para captacao do feed', 'horario', $attributes);
echo '<br>';

echo form_input('horario', $horario);
echo '<br>';
echo '<br>';


echo form_label('Ativar ou desativar Fonte', 'ativado', $attributes);
echo '<br>';


$extraFormInputs = array();
$extraFormInputs['type'] = 'number';



echo form_input('ativado', $ativado, $extraFormInputs);
echo '<br>';
echo '<br>';


echo form_label('ultimoUsuario', 'ultimoUsuario', $attributes);
echo '<br>';


echo form_input('ultimoUsuario', 'ultimoUsuario', ['readonly' => 'true']);
echo '<br>';
echo '<br>';

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