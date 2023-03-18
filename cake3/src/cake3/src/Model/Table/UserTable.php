<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class UserTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('users');
        $this->addBehavior('User');
    }

    public function getByEmail($email)
    {
        // Get user by email from database
        if (!isset($email) || !$email) {
            throw new Exception('Invalid parameters');
        }

        $user_data = $this->find('all')
            ->where(['email' => $email])
            ->first();

        return $user_data ?? null;
    }
}
