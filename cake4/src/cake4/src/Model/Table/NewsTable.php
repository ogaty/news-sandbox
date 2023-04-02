<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class NewsTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('news_posts');
    }

}
