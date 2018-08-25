<?php

namespace App\Entity\Params;

class ItemParams
{

	private $id ;
	private $category;
	private $price;
	private $order;

	public function setId($id) 
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setCategory($category) 
	{
		$this->category = $category;
	}

	public function getCategory()
	{
		return $this->category;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setOrder($order)
	{
		$this->order = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}
}