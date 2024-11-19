<?php


namespace App\Models;


class Recipe extends \Core\Model
{
    public $name, $description, $prep_time, $portions, $picture, $user_id, $type_id;


    // Propriétés 1-N
    // Protected accesible pour les enfants pour les parents mais pas le reste
    // Attention on l'utilse car dans le \Core\Model le return fait un return du $user qui est en private
    protected $user = null;


    public function setUser()
    {
        $this->user = UserManager::findOneById($this->user_id);
    }
}
