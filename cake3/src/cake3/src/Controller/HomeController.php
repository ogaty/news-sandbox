<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\Event\Event;

class HomeController extends AppController
{
    public function initialize()
    {
        $this->loadComponent('Auth');
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
    }

    /**
     * Index method
     *
     */
    public function index()
    {
        $news = $this->loadModel('News');
        $newsList = $news->find('all');
        $this->set(compact('newsList'));

        return $this->render('index');
    }
}
