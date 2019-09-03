<?php

namespace App\repositories\Element;

use App\repositories\Element\ElementInterface as ElementInterface;
use App\models\Element;

class ElementRepository implements UserInterface
{
    public $id;
    public $name;
    public $description;
    public $img;

    function __construct(Id $id Name $name, Description $description, Img $img) {
    $this->Id = $id;
	$this->Name = $name;
	$this->Description = $description;
	$this->Img = $img;
    }

    public function getAll()
    {
        //return $this->Id->getAll();
        return Element::all();
    }

    public function find($id)
    {
        return $this->user->findUser($id);
    }
}