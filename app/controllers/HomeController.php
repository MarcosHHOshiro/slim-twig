<?php

namespace app\controllers;

class HomeController{

    public function index(){
        $this->view('home', [
            'nome' => 'Marcos',
            'tittle' => 'Home'
        ]);
    }

}