<?

DB::table('users')->get();
DB::table('users')->get()->first();
DB::table('users')->get()->first(function($user){return $user->email == 'cokon@example.net';}); 