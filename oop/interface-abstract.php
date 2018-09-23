<?php

interface Provider {

	public function authorize();
}

function login (Provider $provider)
{
	$provider->authorize();
}

abstract Provider {
	
	abstract protected function getAuthorizationUrl();

}

class FacebookProvider extends Provider {
	
	protected function getAuthorizationUrl()
	{
		return '';
	}	
}