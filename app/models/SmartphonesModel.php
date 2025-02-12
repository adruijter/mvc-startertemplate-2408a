<?php

class SmartphonesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSmartphones()
    {
        $sql = 'SELECT  SMPH.Merk
                       ,SMPH.Model
                       ,SMPH.Prijs

                FROM Smartphones as SMPH
                
                ORDER BY SMPH.Prijs DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}