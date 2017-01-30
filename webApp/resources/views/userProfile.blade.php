@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class=jumbotron>
	<div class=container>
		<h1>Profile</h1>
		<h2>{{ $user->name }}</h2>
		<h2>{{ $user->program->name }}</h2>
	</div>
</div>
@endsection
