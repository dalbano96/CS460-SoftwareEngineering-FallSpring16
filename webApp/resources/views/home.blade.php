<!-- home.blade.php -->

@extends('layouts.app')

<?php $user = App\User::find( Auth::user()->id)  ?>

@section('content')
<div class="jumbotron">
<h1 align="center">University of Hawaii at Hilo </h1>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
									<h1 align="center"> Welcome {{ Auth::user()->name }}! </h1>
									
									@if($user->is('admin'))
										<h1 align="center"><a class="btn btn-lg btn-info" href="{{ url('users') }}">View Student List</a></h1>
						
									@else
										<h1 align="center"><a class="btn btn-lg btn-info" href="/user/view/{{ Auth::user()->id }}">View application status</a></h1>
									@endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
