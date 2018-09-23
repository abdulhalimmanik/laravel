<?php 

AppServiceProvider.php 

public function register()
    {
        \App::bind('App\Billing\Stripe', function(){
    return new \App\Billing\Stripe(config('services.stripe.secret'));
});

    }