<?php

namespace App\Models;

use \PDO;
use \Core\DB;

class User extends \Core\Model
{
    public $name, $email, $password, $biography, $picture;
}
