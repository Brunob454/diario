<?= $this -> extend('tema'); ?>
<?php echo $this ->section('ConteudoPrincipal'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Diario Técnologico</title>
</head>

<body>


<div class="bd-masthead mb-3" id="content">
  <div class="container px-4 px-md-3">
    <div class="row align-items-lg-center">

    <div class="col-8 mx-auto col-md-4 order-md-2 col-lg-5">
     <img src="http://2.bp.blogspot.com/-XiMuRF2uafk/VUQkbriuMMI/AAAAAAAAAJg/xk41YtbJE1E/s1600/codeigniter-logo.png" class="img-fluid mb-3 mb-md-0">
    </div>

  


    <div class="col-md-8 order-md-1 col-lg-7 text-center text-md-start">
        <h2 class=mb-5> Usuario Logado: <?=$usersInfo['Usuario'];?></h2>


        <h1 class="mb-3"><font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Site criado para amarzenar Noticias</font></font></h1>
        <p class="lead mb-4">
        <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">
         O Diario Técnologico é um trabalho escolar da Etec Ermelinda, ele foi feito com o CodeIgniter que é um framework de desenvolvimento de aplicações php e
         com o Bootstrap que também é um framework porém é usado para o design, o site serve para armazenar noticias e fontes num banco de dados SQLite3.
        </font></font></p>
      </div>

    </div>
  </div>
</div>



<?= $this->endSection(); ?>