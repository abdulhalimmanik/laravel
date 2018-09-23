<?php
?>
public function store(Request $request)
{
	$this->validate($request, [
		'email.*' => 'required|email'
	], ['email.*' => 'This is not valid']);

	return 'All items are valid';
}

<div class="form-group">
	<label class="control-label" for="email-2">Email 2:</label>
	<input type="email" name="email-2" name="email[]" class="form-control" value="{{ old('email.1') }}">
	@if ($errors->has('email.1'))
		<span class="help-block">{{ $errors->first('email.1') }}</span>
	@endif
</div>