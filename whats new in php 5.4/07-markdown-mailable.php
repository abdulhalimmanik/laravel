<?php 

php artisan make:mail Welcome --markdown="emails.welcome"
php artisan vendor:publish --tag="laravel-mail"

$welcome = new App\Mail\Welcome(App\User::first());
Mail::to(App\User::first())->send($welcome);

Welcome.php 
public $user 

public function __construct($user)
{
	$this->user = $user;
}