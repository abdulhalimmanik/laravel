<?php 

namespace App\Services;

class Twitter{

	protected $curl;

	public function __construct(Curl $curl)
	{
		$this->curl = $curl;
	}

	public function publish($status)
	{
		$this->curl->post($status);
	}
}

namespace App\Services;

class Curl
{

	public function __construct()
	{

	}

	public function post($status)
	{
		var_dump('Using curl to post: ' . $status);
	}
}

use Facades\App\Services\Twitter;

Route::get('/', function(){
	Twitter::publish('this is my status');
});