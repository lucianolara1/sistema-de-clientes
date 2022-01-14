<?php

namespace App\Controllers;

use App\Models\NewModel;
use CodeIgniter\Controller;

class Clientes extends Controller {
    public function index(){

        $model = new NewModel();

        $data = [
            'clientes' => $model->getClientes()
        ];

        echo view('templates/header');
        echo view('clientes/overview', $data);
        echo view('templates/footer');
        
    }

    public function view($id = null) {
        $model = new NewModel();
        $data['clientes'] = $model->getClientes($id);

        if (empty($data['clientes'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não pude encontrar este item: '.$id);
        }

        $data['nome'] = $data ['clientes']['nome'];
        echo view('templates/header');
        echo view('clientes/view', $data);
        echo view('templates/footer');
    }

    public function create(){
        helper('form');

        echo view('templates/header');
        echo view('clientes/form');
        echo view('templates/footer');
    }

    public function store(){
        helper('form');

        $model = new NewModel();

        $rules = [
            'nome' => 'required|min_length[3]|max_length[255]',
            'telefone' => 'required',
            'informacoes' => 'required'
        ];

        if ($this->validate($rules)) {
            $model->save([
                'id'           => $this->request->getVar('id'),
                'nome'         => $this->request->getVar('nome'),
                'telefone'     => $this->request->getVar('telefone'),
                'informacoes'  => $this->request->getVar('informacoes')
            ]);

            echo view('templates/header');
            echo view('clientes/success');
            echo view('templates/footer');
        } else {
            echo view('templates/header');
            echo view('clientes/form');
            echo view('templates/footer');        

        }
    }

    public function edit($id = null) {
        $model = new NewModel();

        $data['clientes'] = $model->getClientes($id);
        if (empty($data['clientes'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Não pude encontrar esse cliente: '.$id);
        }

        $data = [
            'id'          => $data['clientes']['id'],
            'nome'        => $data['clientes']['nome'],            
            'telefone'    => $data['clientes']['telefone'],
            'informacoes' => $data['clientes']['informacoes']
        ];

            echo view('templates/header');
            echo view('clientes/form', $data);
            echo view('templates/footer');   

    }      

    public function delete($id = null) {
        $model = new NewModel();
        $model->delete($id);

        echo view('templates/header');
        echo view('clientes/delete_success');
        echo view('templates/footer');  

    }
}
