<?php

include_once __DIR__ . "/componentIterator.php";

class Component implements IteratorAggregate 
{
	private $_data = Array();

	public function get($_key)
	{
		if (isset($this->_data[$_key]))
			return $this->_data[$_key];
		else
			throw new Exception("'{$_key}' is not setted");
	}

	public function getIterator()
	{
		return new ComponentIterator($this);
	}

	public function add($_item, $_key = null)
	{
		if ($_key === null)
		{
			$this->_data[] = $_item;
		}
		else
		{
			if (isset($this->_data[$_key]))
				throw new Exception("Duplicated key: '{$_key}'");
			else
				$this->_data[$_key] = $_item;
		}
	}

	public function getElements()
	{
		return $this->_data;
	}

	public function length()
	{
		return sizeof($this->_data);
	}

	public function keys()
	{
		return array_keys($this->_data);
	}

	public function exists($_key)
	{
		return isset($this->_data[$_key]);
	}

	public function remove($_key)
	{
		if (!isset($this->_data[$_key]))
			throw new Exception("'{$_key}' is not setted");
		else
			unset($this->_data[$_key]);
	}

	public function clear()
	{
		$this->_data = Array();
	}
}