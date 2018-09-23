<?php 
php artisan make:mail WelcomeToLaracast
change view 
create view below 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container{
            width: 1170px;
            margin: 0 auto;
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome home</h2>
        <p>lorem ipsum</p>
    </div>    
</body>
</html>

use App\Mail\WelcomeToLaracast;
Route::get('/', function(){
	Mail::to('jeff@example.com')->send(new WelcomeToLaracast);
});

config mail.php 

public $user; // in WelcomeToLaracast class