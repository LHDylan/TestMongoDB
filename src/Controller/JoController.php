<?php 

namespace App\Controller;

use App\Model\JoModel;
use App\View\JoView;

class JoController
{
    /**
     * JoModel instance
     * @var JoModel
     */
    private $joModel;

    /**
     * JoView instance
     * @var JoView
     */
    private $joView;

    /**
     * JoController constructor.
     */
    public function __construct()
    {
        $this->joModel = new JoModel();
        $this->joView = new JoView();
    }

    /**
     * function used to start the controller
     * @param string $a
     */
    public function start(string $a = '')
    {
        if(isset($_POST['_method'])) {

            if ($_POST['_method'] == 'POST') {

                $this->store($_POST);
            }

            if ($_POST['_method'] == 'PUT') {

                $this->update($_POST, $a);
            }
            if ($_POST['_method'] == 'DELETE') {

                $this->delete($a);
            }
        } else {
            if ($a == 'create') {

                $this->create();
            }
            elseif (isset($_GET['m']) == 'edit') {
                
                $this->edit($_GET['a']);
            } else {
                
                $this->index();
            }
        }
    }

    /**
     * function used to list all documents
     */
    public function index()
    {
        $documents = $this->joModel->findAll();
        if (!$documents) {
            
            $this->joView->error();
        }
        $this->joView->index($documents);
    }

    /**
     * function used to show the create form
     */
    public function create()
    {
        $this->joView->create();
    }

    /**
     * function used to store a new document
     * @param array $data
     */
    public function store(array $data)
    {
        $this->joModel->add($data);
        
        header('Location: /JoController');
        exit();
    }

    /**
     * function used to show the edit form
     * @param string $id
     */
    public function edit(string $id)
    {
        $document = $this->joModel->findOneBy($id);
        $this->joView->edit($document);
    }

    /**
     * function used to update a document
     * @param array $data
     * @param string $id
     */
    public function update(array $data, string $id)
    {
        $this->joModel->update($data, $id);
        
        header('Location: /JoController');
        exit();
    }

    /**
     * function used to delete a document
     * @param string $id
     */
    public function delete(string $id)
    {
        $this->joModel->delete($id);
        
        header('Location: /JoController');
        exit();
    }
}