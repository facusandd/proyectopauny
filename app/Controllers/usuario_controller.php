<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

    public function __construct(){
        helper(['form', 'url']);
    }

    public function create() {
        $data['titulo'] ='Tractores Pauny 🚜 - Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }

    public function formValidation() {
    
        $input = $this->validate([
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[4]|max_length[10]',
        
        ],

    );
    $formModel = new usuario_Model();

    if (!$input) {
        $data['titulo'] ='Tractores Pauny 🚜 - Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]); 
        echo view('front/footer_view');    
    } else {
        $formModel->save([
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
        ]);

        session()->setFlashdata('success', 'Usuario registrado con exito');
        return $this->response->redirect('/proyectopauny/registro');
    }
    
    }
}
