<!DOCTYPE html>
<html lang="en">
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
<h1 class="h3 mb-3 fw-normal">Login</h1>


<?php
helper('form');
?>
<?= csrf_field(); ?>


<?php
echo form_open('Login/check');
?>

<?php if(!empty(session()->getFlashdata('Falhou'))) : ?>
  <div class="alert alert-danger"><?= session()->getFlashdata('Falhou'); ?></div>
<?php endif ?>

<?php
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
$atributosInput['id'] = "Email";
$atributosInput['name'] = "Email";
$atributosInput['placeholder'] = "Coloque o seu email aqui";
echo form_input($atributosInput);

echo form_label('Digite o seu email aqui', 'Email', $attributes);
?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Email') : '' ?></span> 
<?php
echo '</div>';


echo '<div class="form-floating">';
$password['id'] = "Senha";
$password['name'] = "Senha";
$password['placeholder'] = "Coloque a sua senha aqui";
echo form_input($password);
echo form_label('Digite sua senha aqui', 'Senha', $attributes);
?>
<span class="text-danger"><?= isset($validation) ? display_error($validation, 'Senha') : '' ?></span> 
<?php
echo '</div>';
  ?>



 <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembre de mim
      </label>
    </div> -->



    <p>
    <a href="<?= base_url()?>/Cadastrar/read">Você ainda não tem uma conta?</a>
    </p>

    <input type="submit" name="btnEnvia" value="Entrar" class="w-100 btn btn-lg btn-primary" />

<?php 
echo form_close();
?>

</main>
</body>
</html>
