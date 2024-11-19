<?php

namespace App\Models;

use \PDO;
use \Core\DB;

class User
{
    public $id, $name, $email, $password, $biography, $picture, $created_at;
}
