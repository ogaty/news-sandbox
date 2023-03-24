<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class NewsTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('news_posts');
        $this->addBehavior('News');
    }
}
