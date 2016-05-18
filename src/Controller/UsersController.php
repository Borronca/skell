<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    //LOGIN
    public function login() {
    
        $this->viewBuilder()->layout('loginLayout');//usa o layout de login 
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            //dump($user['name']) or die();
            //pega o nome vindo do post
            $temp = $user['name'];

            if ($user) {
                $this->Auth->setUser($user);
                //return $this->redirect(['controller' => 'noticias']);
                
                //busca no banco o usuário com o nome que veio do post
                $usertemp = $this->Users->find('all', [
                'conditions' => ['name' => $temp]
                ])->first();//or all()
                
               // dump($usertemp->created) or die();
                
                //starta meu session
                $session = $this->request->session();
                //escreve o nome encontrado no banco dentro da session
                $session->write('user',$usertemp->name);
                $session->write('function',$usertemp->function);
                $session->write('avatar',$usertemp->avatar);
                $session->write('created',$usertemp->created);
                    
                return $this->redirect($this->Auth->redirectUrl());
                
            }
            //bad login
            $this->Flash->error(__('Não foi possivel logar-se'));
        }
    }
    
//LOGOUT
    public function logout() {
        //starta a session
        $session = $this->request->session();
       
        $session->delete('user');
        //destroi a session
        $session->destroy();

        $this->Flash->success(__('Volte sempre'));
        
        return $this->redirect($this->Auth->logout());
    }
    
    public function profile() {
        //the silent is gold
    }
}
