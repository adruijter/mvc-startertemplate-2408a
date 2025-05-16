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
                
                ORDER BY ZGRS.Nettowaarde DESC
                
                LIMIT 5';

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

    public function create($data)
    {
        $sql = "INSERT INTO zangeres (Naam, Nettowaarde, Land, Mobiel, Leeftijd)
                VALUES (:naam, :nettowaarde, :land, :mobiel, :leeftijd)";

        $this->db->query($sql);
        $this->db->bind(':naam', $data['naam'], PDO::PARAM_STR);
        $this->db->bind(':nettowaarde', $data['nettowaarde'], PDO::PARAM_INT);
        $this->db->bind(':land', $data['land'], PDO::PARAM_STR);
        $this->db->bind(':mobiel', $data['mobiel'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', $data['leeftijd'], PDO::PARAM_INT);

        return $this->db->execute();
    }

    public function getZangeresById($Id)
    {
        $sql = 'SELECT  ZGRS.Id
                       ,ZGRS.Naam
                       ,ZGRS.Nettowaarde
                       ,ZGRS.Land
                       ,ZGRS.Mobiel
                       ,ZGRS.Leeftijd

                FROM Zangeres as ZGRS
                    
                WHERE ZGRS.Id = :id';

        // Maak je query op orde voor PDO        
        $this->db->query($sql);

        // Koppel de waarde die binnenkomt $Id aan de placeholder :id
        $this->db->bind(':id', $Id, PDO::PARAM_INT);

        // Vraag precies één record op
        return $this->db->single();
    }

    public function updateZangeresById($post)
    {
        $sql = "UPDATE zangeres
                SET    Naam = :naam,
                       Nettowaarde = :nettowaarde,
                       Land = :land,
                       Mobiel = :mobiel,
                       Leeftijd = :leeftijd
                WHERE  Id = :id";

        $this->db->query($sql);

        $this->db->bind(':naam', $post['naam'], PDO::PARAM_STR);
        $this->db->bind(':nettowaarde', $post['nettowaarde'], PDO::PARAM_INT);
        $this->db->bind(':land', $post['land'], PDO::PARAM_STR);
        $this->db->bind(':mobiel', $post['mobiel'], PDO::PARAM_STR);
        $this->db->bind(':leeftijd', $post['leeftijd'], PDO::PARAM_INT);
        $this->db->bind(':id', $post['id'], PDO::PARAM_INT);

        return $this->db->execute();
    }
}