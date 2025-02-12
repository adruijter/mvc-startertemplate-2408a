<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAllSmartphones()
    {
        $sql = 'SELECT * 
                FROM Smartphones';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}