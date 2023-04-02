<?php

namespace App\Controller\Mypage;

use App\Controller\AppController;
use Cake\Chronos\Chronos;

class NewsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

    }

    public function index()
    {
        $newsList = $this->News->find('all');
        $this->set(compact('newsList'));
        return $this->render('index');
    }

    public function create()
    {
        return $this->render('create');
    }

    public function store()
    {
        $entity = $this->News->newEntity($this->request->getData());
        $entity->created = Chronos::now()->format('Y-m-d H:i:s');
        $entity->modified = Chronos::now()->format('Y-m-d H:i:s');

        $this->News->save($entity);

        return $this->redirect([
            'controller' => 'News',
            'action' => 'index',
        ]);

    }

    public function show($id)
    {
        $newsData = $this->News->get($id);
        $this->set(compact('newsData'));
        return $this->render('show');
    }
}
