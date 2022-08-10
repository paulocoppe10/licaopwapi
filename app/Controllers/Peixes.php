<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Peixes extends ResourceController
{
    private $peixesModel;

    public function __construct(){
        $this->peixesModel = new \App\Models\PeixesModel();
    }

    public function todos()
    {
        $data = $this->peixesModel->findAll();
        return $this->response->setJson($data);
    }

    public function peixes($id)
    {
        $data = $this->peixesModel->getPeixes($id);
        return $this->response->setJson($data);
    }

    public function listar()
    {
        
        $data = $this->peixesModel->findAll();
        return $this->response->setJson($data);
    }

}