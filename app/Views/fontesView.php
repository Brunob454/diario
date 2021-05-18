<?= $this->extend('tema'); ?>
<?= $this->section('ConteudoPrincipal'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste de tabela</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>


<body>



<?php

echo "<pre>";

$table = new \CodeIgniter\View\Table();


$template = [
  'table_open'         => '<table class = "table table-striped">',

  'thead_open'         => '<thead class="table-dark">'
  ];

$table->setTemplate($template);


$data = $tabela; 
    

           $table -> setHeading('id', 
                                'nome',
                                'url',
                                'comentario',
                                'horario',
                                'ativado',
                                'ultimoUsuario',
                                'dataCriado',
                                'dataEditado',
                                'dataExcluido',
                                'Atualizar',
                                'Deletar');

echo $table->generate($data);
?>



    
</body>
</html>
<?= $this->endSection();?>