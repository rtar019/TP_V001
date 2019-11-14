<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookings Controller
 *
 * @property \App\Model\Table\BookingsTable $Bookings
 *
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BookingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Rooms', 'Guests']
        ];
        $bookings = $this->paginate($this->Bookings);

        $this->set(compact('bookings'));
    }

    /**
     * View method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $booking = $this->Bookings->get($id, [
            'contain' => ['Users', 'Rooms', 'Guests', 'Payments']
        ]);

        $this->set('booking', $booking);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $booking = $this->Bookings->newEntity();
        if ($this->request->is('post')) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData());
            $booking->user_id = $this->Auth->user('id');
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }

        // Bâtir la liste des catégories  
        $this->loadModel('Pays');
        $pays = $this->Pays->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $pays = $pays->toArray();
        reset($pays);
        $pays_id = key($pays);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $villes = $this->Bookings->Villes->find('list', [
            'conditions' => ['Villes.pays_id' => $pays_id],
        ]);

        $users = $this->Bookings->Users->find('list', ['limit' => 200]);
        $rooms = $this->Bookings->Rooms->find('list', ['limit' => 200]);
        $guests = $this->Bookings->Guests->find('list', ['limit' => 200]);

        $this->set(compact('booking', 'users', 'rooms', 'guests', 'villes', 'pays'));
        $this->set('booking', $booking);
    }

    /**
     * Edit method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($slug)
    {
        $booking = $this->Bookings
            //->get($id, ['contain' => []
            ->findBySlug($slug)
            ->contain('Tags') // Charge les tags associés
            ->firstOrFail();
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $booking = $this->Bookings->patchEntity($booking, $this->request->getData(), [
                // Ajouté : Empêche la modification du user_id.
                'accessibleFields' => ['user_id' => false]
            ]);
            if ($this->Bookings->save($booking)) {
                $this->Flash->success(__('The booking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The booking could not be saved. Please, try again.'));
        }
        $users = $this->Bookings->Users->find('list', ['limit' => 200]);
        $rooms = $this->Bookings->Rooms->find('list', ['limit' => 200]);
        $guests = $this->Bookings->Guests->find('list', ['limit' => 200]);
        $this->set(compact('booking', 'users', 'rooms', 'guests'));
        $this->set('booking', $booking);
    }

    /**
     * Delete method
     *
     * @param string|null $id Booking id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $booking = $this->Bookings->get($id);
        if ($this->Bookings->delete($booking)) {
            $this->Flash->success(__('The booking has been deleted.'));
        } else {
            $this->Flash->error(__('The booking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        // Les actions 'add' et 'tags' sont toujours autorisés pour les utilisateur
        // authentifiés sur l'application
        if (in_array($action, ['add', 'tags', 'edit', 'delete'])) {
            return true;
        }

        // Toutes les autres actions nécessitent un slug
        $slug = $this->request->getParam('pass.0');
        if (!$slug) {
            return false;
        }

        // On vérifie que l'article appartient à l'utilisateur connecté
        $booking = $this->Bookings->findBySlug($slug)->first();

        return $booking->user_id === $user['id'];
    }
}
