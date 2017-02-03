<!-- admin/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
<div class="jumbotron">

<h1>{{ $user->name }}</h1>
<h2>{{ $user->email }}</h1>

<form method="POST" action="">
	<input type="hidden" name="_token" value="">
	<input type="hidden" name="_method" value="PUT">
	
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" value="" class="form-control">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" value="" class="form-control">
	</div>	

	<button type="submit" class="btn btn-primary">
		<i class="fa fa-btn"></i>Update
	</button>

</form>

</div>
</div>
@endsection
