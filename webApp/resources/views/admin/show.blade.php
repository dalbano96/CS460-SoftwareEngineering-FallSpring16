@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container">
<div class=jumbotron>
		<h1>{{ $user->name }}</h1>
		<h2>Applying to {{ $user->program->name }}</h2>
		<h2>{{ $user->program->department->name }}</h2>
</div>	
	 <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <td>Item</td>
          <td>Choose File</td>
					<td>Upload</td>
        </tr>
      </thead>
      <tbody>
        @foreach($user->requirements as $requirement)
        <tr>
        	<td>{{ $requirement->name }}</td>
					<td><input class="btn btn-small" type="file" /></td>
 					<td><input class="btn btn-small btn-info" type="button" value="Upload" /></td>
        </tr>
        @endforeach
      </tbody>
    </table>

</div>
@endsection
