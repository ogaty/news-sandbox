<?php

namespace App\Controller;
use Cake\Chronos\Chronos;
use Intervention\Image\ImageManager;

class NewsController extends AppController
{
    public function initialize()
    {
        $this->loadComponent('Csrf');
        $this->loadModel('News');

        $session = $this->request->getSession();
        if (! $session->check('user')) {
            $this->redirect([
                'controller' => 'Auth',
                'action' => 'index',
            ]);
        }
    }


    public function index()
    {
        $newsList = $this->News->find('all');
        $this->set('newsList', $newsList);

        return $this->render('index');
    }

    public function create()
    {
        return $this->render('create');
    }

    public function store()
    {
        $post = $this->News->newEntity($this->request->getData());
        $post->created = Chronos::now()->format('Y-m-d H:i:s');
        $post->modified = Chronos::now()->format('Y-m-d H:i:s');

//        if ($this->request->getData()['media']) {
//            $manager = new ImageManager(['driver' => 'gd']);
//            $img = $manager->make($this->request->getData()['media']['tmp_name'])->resize(300, 200)->save('foo.jpg');
//        }

        $this->News->save($post);

        return $this->redirect([
            'controller' => 'News',
            'action' => 'index',
        ]);
    }

    public function edit($id)
    {
        return $this->render('edit');
    }

    public function update($id)
    {
        return $this->redirect([
            'controller' => 'News',
            'action' => 'index',
        ]);
    }

    public function delete($id)
    {
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
