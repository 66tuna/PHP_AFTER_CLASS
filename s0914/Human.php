<?php

class Human{
    public $name;
    public $hobbies = [];

    public function __construct($name, $hobbies)
    {
        $this->hobbies = $hobbies;
        $this->name = $name;
        
    }

    public function setHobby(string $hobby){
        $this->hobbies[] = $hobby;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }

    public function hasHobby(string $hobby){
        return in_array($hobby, $this->hobbies);
    }

    public function hasName(string $name){
        return $this->name;
    }
}