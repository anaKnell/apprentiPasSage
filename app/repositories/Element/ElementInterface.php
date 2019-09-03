<?php 
namespace App\repositories\Element;
interface ElementInterface{
	public function getAll();
	public function find($id);
}
