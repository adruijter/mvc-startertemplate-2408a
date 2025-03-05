<?php

class SneakersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllSneakers()
    {
        $sql = 'SELECT  SNKS.Merk
                       ,SNKS.Model

                FROM Sneakers as SNKS
                
                ORDER BY SNKS.Merk DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}