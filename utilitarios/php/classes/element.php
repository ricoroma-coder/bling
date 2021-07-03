<?php

include_once __DIR__ . "/component.php";

class Element extends Component 
{
	public function getElements()
	{
		$this->add($this);
		return parent::getElements();
	}
}