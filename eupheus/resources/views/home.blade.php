<!-- home.blade.php -->

@extends('layouts.app')

@section('content')
<div class="jumbotron">
<div class="container">
	<div class="col-lg-12">
                <h1 align="center">{{ LAConfigs::getByKey('sitename_part1') }} <b>{{ LAConfigs::getByKey('sitename_part2') }}</b></h1>
                <h3 align="center">{{ LAConfigs::getByKey('site_description') }}</h3>
	</div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
									
									<!-- @if(Auth::guest())
										<h1 align="center"><a class="btn btn-lg btn-info" href="{{ url('users') }}">View Student List</a></h1>
						
									@else
										<h1 align="center"><a class="btn btn-lg btn-info" href="/user/view/{{ Auth::user()->id }}">View application status</a></h1>
									@endif -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
