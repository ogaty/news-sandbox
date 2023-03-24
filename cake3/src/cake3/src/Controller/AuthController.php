<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Auth Controller
 *
 *
 * @method \App\Model\Entity\Auth[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AuthController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
    {
        $this->render('login');
    }

    public function login()
    {
        $this->request->allowMethod('post');
        // Get request parameters
        $params = $this->request->getParsedBody();
        // Get user from database

        $this->loadModel('User');
        $user_data = $this->User->getByEmail($params['email']);

        // Verify password
        if (!$user_data || !password_verify($params['password'], $user_data['password'])) {
            return $this->redirect($this->referer());
        }

        $session = $this->request->getSession();
        $session->write('user', $user_data);
        $session->write('welcome', 'welcome');

        return $this->redirect([
            'controller' => 'Mypage',
            'action' => 'index',
        ]);
    }

    public function logout()
    {
        $session = $this->request->getSession();
        $session->delete('user');

        return $this->redirect([
            'controller' => 'Auth',
            'action' => 'index',
        ]);
    }
}
