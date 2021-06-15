<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelCad extends Model
{
    protected $table      = 'logar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;






    protected $allowedFields = [
                                "Usuario",
                                "Senha",
                                "Nome",
                                "Email"
                            ];

    protected $useTimestamps = true;
    protected $createdField  = 'dataCriado';
    protected $updatedField  = 'dataEditado';
    protected $deletedField  = 'dataExcluido';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}