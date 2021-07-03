<?php

class ComponentIterator implements Iterator 
{
	private $_component;
	private $_currentIndex;
	private $_keys;

	public function __construct(Component $_component)
	{
		$this->_component = $_component;
		$this->_currentIndex = 0;
		$this->_keys = $_component->keys();
	}

	public function current()
	{
		return $this->_component->get($this->key());
	}

	public function next()
	{
		$this->_currentIndex++;
	}

	public function valid()
	{
		return isset($this->_keys[$this->_currentIndex]);
	}

	public function key()
	{
		return $this->_keys[$this->_currentIndex];
	}

	public function rewind()
	{
		$this->_currentIndex = 0;
	}

	
}