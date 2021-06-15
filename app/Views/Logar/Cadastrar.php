<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }


      html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
    </style>


</head>

<body class='text-center'>


<main class='form-signin'>
<img class="mb-4" src="https://i1.wp.com/storage.googleapis.com/wordpress_file_storage/2017/04/codeigniter.png?fit=256%2C256&ssl=1" alt="" width="80" height="80">
<h1 class="h3 mb-3 fw-normal">Cadastrar Usuario</h1>


<?php
helper('form');
?>
<?= csrf_field(); ?>


<!--Mensagem de alerta-->
<?php if(!empty(session()->getFlashdata('Falhou'))) : ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('Falhou'); ?></div>
<?php endif ?>


<?php if(!empty(session()->getFlashdata('Pronto'))) : ?>
  <div class="alert alert-success"><?= session()->getFlashdata('Pronto'); ?></div>
<?php endif ?>

<?php
echo form_open('Cadastrar/cadInit');

$atributosInput = [
    'type' => "text",
    'class' => "form-control",
    
   
    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'nome'
  ];
  
  $attributes = [
    'for' => "floatingInput"
  ];

  $password = [
      'type' => "password",
      'class' => "form-control",

    'placeholder' => "Digite aqui seu nome",
    'name' => "nome",
    'id' => 'nome'
  ];


  
echo '<div class="form-floating">';
$atributosInput['id'] = "Nome";
$atributosInput['name'] = "Nome";
$atributosInput['placeholder'] = "Digite aqui o seu nome";
echo form_input($atributosInput);

echo form_label('Digite seu nome', 'Nome', $attributes);

?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Nome') : '' ?></span> 
<?php
echo '</div>';




echo '<div class="form-floating">';
$atributosInput['id'] = "Email";
$atributosInput['name'] = "Email";
$atributosInput['placeholder'] = "Digite aqui o seu Email";
echo form_input($atributosInput);

echo form_label('Digite seu Email', 'Email', $attributes);
?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Email') : '' ?></span> 
<?php
echo '</div>';



echo '<div class="form-floating">';
$atributosInput['id'] = "Usuario";
$atributosInput['name'] = "Usuario";
$atributosInput['placeholder'] = "Digite aqui um nome de usuario de sua preferência";
echo form_input($atributosInput);

echo form_label('Digite um nome de Usuario', 'Usuario', $attributes);
?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Usuario') : '' ?></span> 
<?php
echo '</div>';


echo '<div class="form-floating">';
$password['id'] = "Senha";
$password['name'] = "Senha";
$password['placeholder'] = "Crie aqui uma senha";
echo form_input($password);

echo form_label('Crie uma senha', 'Senha', $attributes);
?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Senha') : '' ?></span> 
<?php
echo '</div>';
  ?>
    <p>
    <a href="<?= base_url()?>/Login/read">Já possui uma conta?</a>
    </p>
    <input type="submit" name="btnEnvia" value="Cadastrar" class="w-100 btn btn-lg btn-primary" />

<?php 
echo form_close();
?>

</main>
</body>
</html>
