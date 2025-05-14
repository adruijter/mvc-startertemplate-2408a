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
        // Check of er op de submit knop van het formulier is gedrukt
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $result = $this->zangeressenModel->create($_POST);

            if ($result)
            {
                echo "<div class='alert alert-success text-center' role='alert'><h5 class='text-succes'>Het record is toegevoegd</h5></div>";
                header('Refresh: 2; url=' . URLROOT . '/zangeressen/index');
            }

        }

        $data = [
            'title' => "Voeg een nieuwe zangeres toe"
        ];

        $this->view('zangeressen/create', $data);
    }
} 