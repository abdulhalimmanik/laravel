<?php 

factory('App\User')->make();
factory('App\User',5)->make();
factory('App\User',10)->create();
php artisan db:seed
DatabaseSeeder.php 

public function run()
{
	User::truncate();
	factory(User::class, 50)->create();
}