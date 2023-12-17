<?php
namespace App\Controllers;

class utama extends BaseController{

    public function beranda(){
        echo view('pages/header');
        echo view('pages/beranda');
        echo view('pages/footer');
    }
    public function profile(){
        echo view('pages/header');
        echo view('pages/profile');
        echo view('pages/footer');
    }
    public function galeri(){
        echo view('pages/header');
        echo view('pages/galeri');
        echo view('pages/footer');
    }
}


?>