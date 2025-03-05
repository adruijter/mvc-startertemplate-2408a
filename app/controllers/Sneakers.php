<?php

class Sneakers extends BaseController
{
    private $sneakersModel;

    public function __construct()
    {
        $this->sneakersModel = $this->model('SneakersModel');
    }


    public function index()
    {
        $result = $this->sneakersModel->getAllSneakers();
        
        $data = [
            'title' => 'Overzicht Sneakers',
            'sneakers' => $result
        ];

        $this->view('sneakers/index', $data);
    }
}