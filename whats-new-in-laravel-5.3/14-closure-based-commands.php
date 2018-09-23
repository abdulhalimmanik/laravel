<?php 

console.php 

Artisan::command('generate:model {name}', function(){

	$model = $this->argument('name');
	$template = File::get('app/templates/model.txt');

	$compiled = str_replace('{name}', $model, $template);

	File::put("app/{$model}.php", $compiled);
})->describe('Generate a model');


templates/model.txt 

<?php 

namespace App;

class {name}
{
	
	public function save()
	{
	
	}
}

practice 3