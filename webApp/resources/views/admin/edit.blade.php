<!-- admin/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
<div class="jumbotron">
	<h1 align="center">Edit {{ $user->name }}'s Profile</h1>
</div>

<h3>Current Name: {{ $user->name }}</h3>

<form method="POST" action="">
	<input type="hidden" name="_token" value="">
	<input type="hidden" name="_method" value="PUT">
	
	<div class="form-group">
		<label for="name">Change Name</label>
		<input type="text" name="name" value="" class="form-control">
	</div>

	<h3>Current Email: {{ $user->email }}</h3>

	<div class="form-group">
		<label for="email">Change Email</label>
		<input type="text" name="email" value="" class="form-control">
	</div>	

	<button type="submit" class="btn btn-primary">
		<i class="fa fa-btn"></i>Update
	</button>

</form>
</div>
@endsection
