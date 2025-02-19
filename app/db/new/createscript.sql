-- Step: 01
-- ***************************************************************
-- Doel : Maak een nieuwe database aan met de naam Mvc_smartphone_2408B
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           13-11-2024      Arjan de Ruijter    Smartphones
-- ***************************************************************

-- Verwijder database Mvc_smartphone_2408B
DROP DATABASE IF EXISTS `Mvc_smartphone_2408B`;

-- Maak een nieuwe database aan Mvc_smartphone_2408B
CREATE DATABASE `Mvc_smartphone_2408B`;

-- Gebruik database Mvc_smartphone_2408B
USE `Mvc_smartphone_2408B`;

-- Step: 02
-- ***************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Smartphones
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Tabel Smartphones
-- ***************************************************************
-- Onderstaande velden toevoegen aan de tabel Smartphones
-- Merk, Model, Prijs, Geheugen, Besturingssysteem, Schermgrootte
-- ***************************************************************

CREATE TABLE Smartphones
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL
    ,Prijs              DECIMAL(6,2)                NOT NULL
    ,Geheugen           DECIMAL(4,0)                    NULL        DEFAULT NULL        				
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 03
-- ***************************************************************
-- Doel : Vul de tabel Smartphones met gegevens
-- ***************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           11-02-2025      Arjan de Ruijter    Vulling Smartphones
-- ***************************************************************

INSERT INTO Smartphones
(
      Merk
     ,Model
     ,Prijs
     ,Geheugen
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Apple', 'iPhone 16 Pro', 1260, 512, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Samsung', 'Galaxy S25 Ultra', 1324, 256, 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Google', 'Pixel 9 Pro', 1152, 1000, 1, NULL, SYSDATE(6), SYSDATE(6));


 

-- Step: 04
-- *****************************************************************************************************
-- Doel : Maak een nieuwe tabel aan met de naam Sneakers
-- *****************************************************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Tabel Sneakers
-- *****************************************************************************************************
-- Onderstaande velden toevoegen aan de tabel Sneakers
-- Type (Hardloop, Basketbal, Casual), Prijs, Materiaal (Leer, Mesh, Synthetisch), Gewicht, Releasedatum
-- *****************************************************************************************************

CREATE TABLE Sneakers
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL	
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 04
-- *****************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Vulling Sneakers
-- *****************************************************************

INSERT INTO Sneakers
(
      Merk
     ,Model
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Nike', 'Air Jordan 1', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Adidas', 'Yeezy Boost 350', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('New Balance', 'Pixel 9 Pro', 1, NULL, SYSDATE(6), SYSDATE(6));