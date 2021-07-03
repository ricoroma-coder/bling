<?php

include_once __DIR__ . "/component.php";

class Composite extends Component 
{
	public function getElements()
	{
		foreach (parent::getElements() as $_element)
		{
			$this->add($_element);
		}

		return parent::getElements();
	}
}