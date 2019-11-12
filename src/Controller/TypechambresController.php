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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typechambres = $this->paginate($this->Typechambres);

        $this->set(compact('typechambres'));
    }

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['autocompletedemo', 'findType', 'add', 'edit', 'delete']);
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

    /**
     * View method
     *
     * @param string|null $id Typechambre id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typechambre = $this->Typechambres->get($id, [
            'contain' => []
        ]);

        $this->set('typechambre', $typechambre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typechambre = $this->Typechambres->newEntity();
        if ($this->request->is('post')) {
            $typechambre = $this->Typechambres->patchEntity($typechambre, $this->request->getData());
            if ($this->Typechambres->save($typechambre)) {
                $this->Flash->success(__('The typechambre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typechambre could not be saved. Please, try again.'));
        }
        $this->set(compact('typechambre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Typechambre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typechambre = $this->Typechambres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typechambre = $this->Typechambres->patchEntity($typechambre, $this->request->getData());
            if ($this->Typechambres->save($typechambre)) {
                $this->Flash->success(__('The typechambre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typechambre could not be saved. Please, try again.'));
        }
        $this->set(compact('typechambre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Typechambre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typechambre = $this->Typechambres->get($id);
        if ($this->Typechambres->delete($typechambre)) {
            $this->Flash->success(__('The typechambre has been deleted.'));
        } else {
            $this->Flash->error(__('The typechambre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
