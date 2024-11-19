<?php


namespace App\Models;


class Recipe
{
    public $id, $name, $created_at, $description, $prep_time, $portions, $picture, $user_id, $type_id;


    // Propriétés 1-N
    private $user = null;


    public function __get(string $property)
    {
        if ($this->$property === null):
            // Créer une variable qui prend le set+Maj(property)
            $setterName = 'set' . ucfirst($property);
            // Si la method existe sur l'object $this
            if (method_exists($this, $setterName)):
                $this->$setterName();
            endif;
        endif;
        return $this->$property;
    }


    public function setUser()
    {
        $this->user = UserManager::findOneById($this->user_id);
    }
}
