<?php 

namespace App\Database;

use App\Config\Database;
use MongoDB\Client;
use Exception;

class Dao
{
    /**
     * Client instance
     * @var Client
     */
    private $client;

    /**
     * Dao constructor.
     */
    public function __construct()
    {
        try {

            $this->client = new \MongoDB\Client(Database::$uri);
        } catch (Exception $e) {

            echo $e->getMessage();
            $this->client = false;
        }
    }
    
    /**
     * function to get a collection
     * @param string $collection
     */
    function query(string $collection)
    {
        try {

            return $this->client->JO2024->$collection;
        } catch (Exception $e) {

            echo $e->getMessage();
            return false;
        }
    }
}