<?php

class Zangeressen extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
        $this->zangeressenModel = $this->model('ZangeressenModel');
    }

    public function index($message = 'none')
    {
        $result = $this->zangeressenModel->getAllZangeressen();
        
        $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'zangeressen' => $result,
            'message' => $message
        ];

        $this->view('zangeressen/index', $data);
    }

    public function delete($Id)
    {
        $this->zangeressenModel->delete($Id);
        
        header('Refresh:3 ; url=' . URLROOT . '/zangeressen/index');

        $this->index('flex');
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
        $data = [
            'title' => 'Wijzig zangeres',
            'message' => 'none'
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $Id = $_POST['id'];

            $this->zangeressenModel->updateZangeresById($_POST);

            $data['message'] = 'flex';

            header('Refresh: 3; url=' . URLROOT . '/zangeressen/index');
        }
        
        $data['zangeres'] = $this->zangeressenModel->getZangeresById($Id);        

        $this->view('zangeressen/update', $data);        
    }
} 