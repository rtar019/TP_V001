<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typechambres Controller
 *
 * @property \App\Model\Table\TypechambresTable $Typechambres
 *
 * @method \App\Model\Entity\Typechambre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypechambresController extends AppController
{

    public function index()
    {
        $typechambres = $this->paginate($this->Typechambres);

        $this->set(compact('typechambres'));
    }

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['autocompletedemo', 'findType']);
        $this->viewBuilder()->setLayout('monopage');
    }

    public function findType() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];
            $results = $this->Typechambres->find('all', array(
                'conditions' => array('Typechambres.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['name']);
            }
            echo json_encode($resultArr);
        }
    }

    public function autocompletedemo() {
        
    }
}
