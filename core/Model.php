<?php


namespace Core;

abstract class Model
{
    public $id, $created_at;

    public function __get(string $property)
    {
        if ($this->$property === null):
            $setterName = 'set' . ucfirst($property);
            if (method_exists($this, $setterName)):
                $this->$setterName();
            endif;
        endif;
        return $this->$property;
    }
}
