<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=eaajvvyq_Competences_bts;charset=utf8", "eaajvvyq_admincomp", "/nm3Hmfp~mg0~,/Zg~");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
