<!-- admin/index.blade.php -->

@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="jumbotron"></div>
	<div class="container">
		<h1>All users</h1>
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Program</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
				<td><a href="/user/profile/{{ $user->id }}">{{ $user->name }}</a></td>
				<td>{{ $user->email }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</div>
@endsection
