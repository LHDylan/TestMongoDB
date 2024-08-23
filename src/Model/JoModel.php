<?php 

namespace App\Model;

use App\Database\DAO;
use MongoDB\BSON\ObjectId;

class JoModel
{
    /**
     * DAO instance
     * @var DAO
     */
    private $dao;

    /**
     * JoModel constructor.
     */
    public function __construct()
    {
        $this->dao = new DAO();
    }

    /**
     * Function used to find all athletes in the database
     */
    public function findAll()
    {
        $collection = $this->dao->query('athlete');
        if (!$collection) {
            return false;
        }
        
        $documents = $collection->find();
        return $documents;
    }

    /**
     * Function used to find an athlete in the database
     * @param string $id
     */
    public function findOneBy(string $id)
    {
        $collection = $this->dao->query('athlete');
        $documentId = new ObjectId($id);
        $document = $collection->findOne(['_id' => $documentId]);
        return $document;
    }

    /**
     * Function used to add an athlete in the database
     * @param array $data
     */
    public function add(array $data)
    {
        $collection = $this->dao->query('athlete');
        $collection->insertOne($data);
    }

    /**
     * Function used to update an athlete in the database
     * @param array $data
     * @param string $id
     */
    public function update(array $data, string $id)
    {
        $collection = $this->dao->query('athlete');       
        $documentId = new ObjectId($id);
        $collection->updateOne(['_id' => $documentId], ['$set' => $data]);        
    }

    /**
     * Function used to delete an athlete in the database
     * @param string $id
     */
    public function delete(string $id)
    {
        $collection = $this->dao->query('athlete');
        $documentId = new ObjectId($id);
        $collection->deleteOne(['_id' => $documentId]);
    }


}