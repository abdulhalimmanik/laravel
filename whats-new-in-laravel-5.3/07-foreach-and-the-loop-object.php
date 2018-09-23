<?php 

<li class="{{ $loop->first ? 'first' : '' }}">{{ $user->name }}</li>

{{ $user->name }} {{  $loop->remaining ? ', ' : '' }}