<?php
 require_once 'Database.php';

class Client
{
    public function getClient()
    {
        $database = new Database();
        $connection = $database->getConnection();

        $result = $connection->query('SELECT * FROM CLIENT');
        return $result->fetchAll();  
    }
}
?>