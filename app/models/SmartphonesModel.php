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
                       ,SMPH.Geheugen
                       ,SMPH.Besturingssysteem
                       ,CONCAT(SMPH.Schermgrootte, " inch") AS Schermgrootte
                       ,DATE_FORMAT(SMPH.Releasedatum, "%d-%m-%Y") AS Releasedatum
                       ,CONCAT(SMPH.MegaPixels, " MP") AS MegaPixels
                       ,SMPH.Gewicht

                FROM Smartphones as SMPH
                
                ORDER BY SMPH.Merk DESC
                        ,SMPH.Prijs ASC
                        ,SMPH.Geheugen DESC
                        ,SMPH.ReleaseDatum DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}