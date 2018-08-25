<?php

namespace App\Http\Requests;

use App\Entity\Params\ItemParams;
use Illuminate\Http\Request;

class ItemRequest 
{
	private $request;

	private $bean;

	public function __construct(Request $request,ItemParams $bean)
	{
		$this->request = $request;
		$this->bean = $bean;
	}

	public function toParamsBean()
	{
		$this->bean->setId($this->request->input('id'));
		$this->bean->setCategory($this->request->input('category'));
		$this->bean->setPrice($this->request->input('price'));
		$this->bean->setOrder($this->request->input('order'));
		return $this->bean;
	}
}