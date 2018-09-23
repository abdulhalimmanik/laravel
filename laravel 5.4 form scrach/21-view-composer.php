<?php 

Post.php 
public function scopeFilter($query, $filters)
{

   if($month = $filters['month'] ?? false){
$query->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if($year = $filters['year'] ?? false){
        $query->whereYear('created_at', $year);
    }
}

AppServiceProvider.php 
public function boot()
{
    //
    Schema::defaultStringLength(191);
    
    view()->composer('layouts.sidebar', function($view){
        $view->with('archives', \App\Post::archives());
    });
}
