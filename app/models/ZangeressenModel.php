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
        $sql = 'SELECT  ZGRS.Id
                       ,ZGRS.Naam
                       ,ZGRS.Nettowaarde
                       ,ZGRS.Land
                       ,ZGRS.Mobiel
                       ,ZGRS.Leeftijd

                FROM Zangeres as ZGRS
                
                ORDER BY ZGRS.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function delete($Id)
    {
        // De delete query
        $sql = "DELETE 
                FROM Zangeres 
                WHERE Id = :Id";
        
        // De query uitvoeren
        $this->db->query($sql);

        // De parameter binden
        $this->db->bind(':Id', $Id, PDO::PARAM_INT);

        // De query uitvoeren
        return $this->db->execute();
    }
}