<?php

show.blade.php

@extends ('layouts.master')

@section('content')
	
	<h1> A place to show </h1>

@endsection

layout.blade.php

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@include('layouts.nav')
	@yields('content')
	@include('layouts.footer')
</body>
</html>