<?php

class Horloges extends BaseController
{
    private $horlogesModel;

    public function __construct()
    {
        $this->horlogesModel = $this->model('HorlogesModel');
    }


    public function index()
    {
        $result = $this->horlogesModel->getAllHorloges();
        
        $data = [
            'title' => 'Overzicht Sneakers',
            'horloges' => $result
        ];

        $this->view('horloges/index', $data);
    }
}