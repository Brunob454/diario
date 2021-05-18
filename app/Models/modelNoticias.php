<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNoticias extends Model
{
    protected $table      = 'noticias';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;






    protected $allowedFields = [
                                "titulo",
                                "link",
                                "ultimoUsuario"
                            ];

    protected $useTimestamps = true;
    protected $createdField  = 'dataCriado';
    protected $updatedField  = 'dataEditado';
    protected $deletedField  = 'dataExcluido';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}