<?php 

interface Logger{

}

class LogToFile {

	public function execute($message)
	{
		echo 'log message to a file ' . $message;
	}
}

class LogToDatabase {

	public function execute($message)
	{
		var_dump('log message to a database');
	}
}

class UsersController {

	protected $logger;

	public function __construct(LogToFile $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'jhon';

		$this->logger->execute($user);
	}
}

$controller = new UsersController(new LogToFile);

$controller->show();