@extends('layouts.php')

@section('title', 'Checklist Page')

@section('content')
<div class="jumbotron">
	@foreach($departments as $item)
		<h2>{{ $item->department_name }}</h2>
</div>
@endsection
