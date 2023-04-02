<?php

namespace App\Controller\Mypage;

use App\Controller\AppController;

class MypageController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
    }

    public function index()
    {
        return $this->render('index');
    }
}
