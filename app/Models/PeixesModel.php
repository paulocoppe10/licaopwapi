<?php

namespace App\Models;

use CodeIgniter\Model;

class PeixesModel extends Model

{
    protected $table = 'peixes';
    protected $primaryKey = 'id';
    protected $allowFields = ['especie','tipo','origem','ph','tamanho','idade','valor'];

    public function getPeixes($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}