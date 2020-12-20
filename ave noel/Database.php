<?php

class Database
{
    const DB_HOST = 'mysql:host=localhost:3306;dbname=avenoel';
    const DB_USER = 'root';
    const DB_PASS = '';
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
