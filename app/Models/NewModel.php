<?php

namespace App\Models;
use CodeIgniter\Model;

class  NewModel extends Model {

    protected $table = 'clientes';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome', 'telefone', 'informacoes' ];

    public function getClientes($id = null) {
        if ($id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['id' => $id])->first();
    }
}