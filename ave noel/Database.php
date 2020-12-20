<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost:8889;dbname=avenoel';
    const DB_USER = 'eviatar';
    const DB_PASS = 'eviatar';
    public function getConnection()
    {
        try
    {
        $connection = new PDO (self::DB_HOST,self::DB_USER,self::DB_PASS);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch (PDOException $exp)
    {
        echo "Erreur de connexion à la bdd";
    }

    }
}
?>
