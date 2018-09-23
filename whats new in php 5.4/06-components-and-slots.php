<?php

welcome.blade.php

<div class="container">
	<div class="columns">
		@component('panel')
			@slot('heading')
				hello 
			@endslot

				hi everyone
		@endcomponent
	</div>
</div>

panel.blade.php 

<article class="message">
	<div class="message-header">
		<p>{{ $heading }}</p>
		<button class="delete"></button>
	</div>
	<div class="message-body">
		{{ $slot }}
	</div>
</article>