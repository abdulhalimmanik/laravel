<?php

class Task {

	public $description;
	
	public $completed = false;

	public $age;

	public function __construct($description) 
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function getAge()
	{
		return $this->age * 365;
	}

	public function setAge($age)
	{	
		if($age < 18) 
		{
			throw new Exception("Error Processing Request");			
		}
		$this->age = $age;
	}
}

$task = new Task('hello');

$task->setAge(30);
echo $task->getAge();