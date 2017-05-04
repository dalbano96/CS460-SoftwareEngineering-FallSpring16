@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/admin_support_topics') }}">Admin Support Topic</a> :
@endsection
@section("contentheader_description", $admin_support_topic->$view_col)
@section("section", "Admin Support Topics")
@section("section_url", url(config('laraadmin.adminRoute') . '/admin_support_topics'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Admin Support Topics Edit : ".$admin_support_topic->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($admin_support_topic, ['route' => [config('laraadmin.adminRoute') . '.admin_support_topics.update', $admin_support_topic->id ], 'method'=>'PUT', 'id' => 'admin_support_topic-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'questions')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/admin_support_topics') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#admin_support_topic-edit-form").validate({
		
	});
});
</script>
@endpush
