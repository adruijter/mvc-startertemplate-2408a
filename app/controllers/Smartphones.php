<?php

class Smartphones extends BaseController
{
    private $smartphonesModel;

    public function __construct()
    {
        $this->smartphonesModel = $this->model('SmartphonesModel');
    }


    public function index()
    {
        $result = $this->smartphonesModel->getAllSmartphones();
        
        $data = [
            'title' => 'Overzicht Smartphones',
            'smartphones' => $result
        ];

        $this->view('smartphones/index', $data);
    }
}