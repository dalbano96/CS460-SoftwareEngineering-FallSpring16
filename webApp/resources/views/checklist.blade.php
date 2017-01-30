@extends('layouts.php')

@section('title', 'Checklist Page')

@section('content')
<div class="jumbotron">
	<ul>
	@foreach($requirements->name as $requirement)
		echo <li>{{ $requirement }}</li>
	</ul>
</div>
@endsection
