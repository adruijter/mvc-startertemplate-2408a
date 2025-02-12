<?php

class Smartphones extends BaseController
{
    public function index()
    {
        
        $data = [
            'title' => 'Overzicht Smartphones',
            'message' => 'Op dit moment zijn er geen smartphones beschikbaar',
            'link' => 'https://www.google.com'
        ];

        $this->view('smartphones/index', $data);
    }
}