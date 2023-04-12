<?php
namespace App\Controller;

use App\Controller\AppController;

class NewsController extends AppController
{
    public function show($id)
    {
        $news = $this->News->get($id);
        $this->set('news', $news);

        return $this->render('show');
    }

}
