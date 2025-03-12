<?php

class HorlogesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllHorloges()
    {
        $sql = 'SELECT  HRLS.Merk
                       ,HRLS.Model
                       ,FORMAT(HRLS.Prijs, 0, "de_DE") AS Prijs 

                FROM Horloges as HRLS
                
                ORDER BY HRLS.Prijs DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}