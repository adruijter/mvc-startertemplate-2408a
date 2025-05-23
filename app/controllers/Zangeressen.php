<?php

class Zangeressen extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
        $this->zangeressenModel = $this->model('ZangeressenModel');
    }

    public function index()
    {
        $result = $this->zangeressenModel->getAllZangeressen();
        
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'zangeressen' => $result
        ];

        $this->view('zangeressen/index', $data);
    }

    public function delete($Id)
    {
        $this->zangeressenModel->delete($Id);
        header('location: ' . URLROOT . '/zangeressen/index');
    }

    public function create()
    {
        $data = [
            'title' => "Voeg een nieuwe zangeres toe",
            'message' => 'none'
        ];

        // Check of er op de submit knop van het formulier is gedrukt
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $result = $this->zangeressenModel->create($_POST);

            $data['message'] = 'flex';
            
            header('Refresh:3 ; url=' . URLROOT . '/zangeressen/index');

        }        

        $this->view('zangeressen/create', $data);
    }

    public function update($Id = NULL)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Id = $_POST['id'];

            $this->zangeressenModel->updateZangeresById($_POST);

            echo "<div class='alert alert-success text-center' role='alert'><h5>De wijziging is doorgevoerd</h5></div>";

            header('Refresh: 3; url=' . URLROOT . '/zangeressen/index');
        }
        $result = $this->zangeressenModel->getZangeresById($Id);

        $data = [
            'title' => 'Wijzig zangeres',
            'zangeres' => $result
        ];

        $this->view('zangeressen/update', $data);        
    }
} 