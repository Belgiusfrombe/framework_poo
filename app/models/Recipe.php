<?php

namespace App\Models;

use \PDO;
use \Core\DB;

class Recipe
{
    public $id, $name, $created_at, $description, $prep_time, $portions, $picture, $user_id, $type_id;

    private $user;

    public function __get(string $property)
    {
        if ($property === 'user'):
            $this->setUser();
            return $this->user;
        endif;
    }

    //SETTERS
    public function setUser()
    {
        $this->user = UserManager::findOneById($this->user_id);
    }
}
