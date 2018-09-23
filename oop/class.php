<?php

class Task {

	public $description;
	
	public $completed = false;

	public function __construct($description) 
	{
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

}

$task = new Task('hello');

$task->complete();

echo $task->description;
echo $task->completed; 