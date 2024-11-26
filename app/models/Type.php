<?php

namespace App\Models;

use \PDO;
use \Core\DB;

class Type extends \Core\Model
{
    public $id, $name, $description , $created_at;
}
