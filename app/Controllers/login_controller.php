<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $data['titulo'] ='Tractores Pauny 🚜 - Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_Model();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'usuario dado de baja');
                return redirect()->to('/login');
            } 
        
            $verify_pass = password_verify($password, $pass);

            if($verify_pass){
                $ses_data = [
                    'id_usuario'=> $data['id_usuario'],
                    'usuario' => $data['usuario'],
                    'email' => $data['email'],
                    'pass' => $data['pass'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                    $session->set($ses_data);

                    $session->setFlashdata('msg', 'Bienvenido a Tractores Pauny');
                    return redirect()->to('/panel');
            }
            else{
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/login_controller');
            }
        } 
        else{
            $session->setFlashdata('msg', 'No existe el mail o es incorrecto');
            return redirect()->to('/login_controller');    
            }
        }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}