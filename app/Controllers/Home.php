<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
      if (!session()->has('username')) {
         return redirect()->to('/login');
      }

      $data['username'] = session()->get('username');
      echo view('index', $data);
   }

   public function login()
   {
      return view('login');
   }
}
