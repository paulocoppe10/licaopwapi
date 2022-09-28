<?php

namespace App\Models;

use CodeIgniter\Model;

class PeixesModel extends Model

{
    protected $table = 'peixes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['especie','tipo','origem','ph','tamanho','idade','valor'];

    public function getPeixes($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
    public function getPeixe($limit){
    
        $query = $this->db->query("SELECT * FROM peixes limit ".$limit);

        $result = $query->getResultArray();

        return $result;
    }
}