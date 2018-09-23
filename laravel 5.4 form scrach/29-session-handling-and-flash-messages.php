<?php 

master.blade.php 
@if ($flash = session('message'))
  <div id="flash-message" class="alert alert-success" role="alert">
    {{ $flash }}
  </div>
@endif

FormRequest.php 
session()->flash('message', 'say something.');