<?php
namespace App\Controller;

use App\Controller\AppController;


class HomeController extends AppController
{
    /**
     * Index method
     *
     */
    public function index()
    {
        $session = $this->request->getSession();
        if (!$session->check('user')) {
            return $this->redirect([
                'controller' => 'auth',
                'action' => 'index',
            ]);
        }

        return $this->render('index');
    }
}
