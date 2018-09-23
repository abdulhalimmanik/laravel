<?php
composer require league/flysystem-aws-s3-v3
 
welcome.blade.php 

<form method="POST" action="/avatars" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="avatar"/>
    <button type="submit">save avatar</button>
</form>

web.php 

Route::get('/', function () {
    return view('welcome');
});

Route::post('avatars', function(){
    request()->file('avatar')->store('avatars');
    return back();
});

// for aws s3
Route::post('avatars', function(){
    $file = request()->file('avatar');
    $ext= $file->extension();
    $file->storeAs('avatars/' . auth()->id(), "avatar.{$ext}");
    return back();
});

