<?php 

$schedule->command('laracasts:clear-history')->monthly();
$schedule->command('laracasts:clear-history')->monthly()->sendOutputTo('path/to/fle')->emailOutputTo();
$schedule->command('inspire')->hourly();
$schedule->command('laracasts:daily-report')->dailyAt('23:55');