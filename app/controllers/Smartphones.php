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
            'message' => 'Op dit moment zijn er geen smartphones beschikbaar',
            'link' => 'https://www.google.com'
        ];

        $this->view('smartphones/index', $data);
    }
}