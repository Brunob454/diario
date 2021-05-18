<?php echo $this -> extend('tema'); ?>
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



<div style="text-align: center">



<?php
helper('form');


echo form_open('noticias/update');

echo form_hidden('id', $id);



$attributes = [
    'class' => 'labels',
    'style' => 'color: Blue'
];

echo '<br>';


echo form_label('Titulo Noticia', 'titulo', $attributes);
echo '<br>';
echo form_input('titulo', $titulo);

echo '<br>';

echo form_label('Link da Noticia', 'link', $attributes);
echo '<br>';
echo form_input('link', $link);

echo '<br>';


echo '<br>';

echo form_label('Ultimo Usuario', 'ultimoUsuario', $attributes);
echo '<br>';
echo form_input('ultimoUsuario', $ultimoUsuario, ['readonly' => 'true']);

echo '<br>';
echo '<br>';




?>


<input type="submit" name="btnEnvia" value="Atualizar" class="btn btn-outline-primary"/>



<?php
echo form_close();
?>
    </div>
</body>
</html>


<?php echo $this->endSection(); ?>

