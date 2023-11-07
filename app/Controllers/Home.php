<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] ='Tractores Pauny 🚜 - página principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function principal() {
        $data['titulo'] ='Tractores Pauny 🚜 - página principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienes_somos(){
        $data['titulo'] ='Tractores Pauny 🚜 - Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function registro(){
        $data['titulo'] ='Tractores Pauny 🚜 - Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }    

    public function login(){
        $data['titulo'] ='Tractores Pauny 🚜 - Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function acerca_de(){
        $data['titulo'] ='Tractores Pauny 🚜 - Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    
    public function catalogo(){
        $data['titulo'] ='Tractores Pauny 🚜 - Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }
}
