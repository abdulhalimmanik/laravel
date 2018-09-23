<?php 

php artisan make:mail Welcome --markdown="emails.welcome"
php artisan vendor:publish --tag=laravel-mail
@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
