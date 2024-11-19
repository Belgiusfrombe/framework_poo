<?php

namespace Core;

abstract class Model
{
    public $id, $created_at;

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
}