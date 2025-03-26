<?php

class ZangeressenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllZangeressen()
    {
        $sql = 'SELECT  ZGRS.Naam
                       ,ZGRS.Nettowaarde
                       ,ZGRS.Land
                       ,ZGRS.Mobiel
                       ,ZGRS.Leeftijd

                FROM Zangeres as ZGRS
                
                ORDER BY ZGRS.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}