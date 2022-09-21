<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Peixes extends ResourceController
{
    private $peixesModel;

    public function __construct(){
        $this->peixesModel = new \App\Models\PeixesModel();
    }

    public function listar()
    {
        $data = $this->peixesModel->findAll();
        return $this->response->setJson($data);
    }

    public function peixe($id)
    {
        $data = $this->peixesModel->getPeixes($id);
        return $this->response->setJson($data);
    }

    public function peixes($limit){
        $data = $this->peixesModel->getPeixe($limit);
        return $this->response->setJSON($data);
       
    }

    public function novoPeixe(){
        $this->peixesModel->save([
            'especie' => $this->request->getPost('especie'),
            'tipo' => $this->request->getPost('tipo'),
            'origem' => $this->request->getPost('origem'),
            'ph' => $this->request->getPost('ph'),
            'tamanho' => $this->request->getPost('tamanho'),
            'idade' => $this->request->getPost('idade'),
            'valor' => $this->request->getPost('valor')
        ]);
    }

    public function deletar($id){
        $this->peixesModel->delete($id);
    }

    public function atualizar($id){
        $data = $this->request->getJSON();
        $this->peixesModel->update($id, $data);
    }

}