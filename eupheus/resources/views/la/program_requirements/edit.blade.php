@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/program_requirements') }}">Program Requirement</a> :
@endsection
@section("contentheader_description", $program_requirement->$view_col)
@section("section", "Program Requirements")
@section("section_url", url(config('laraadmin.adminRoute') . '/program_requirements'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Program Requirements Edit : ".$program_requirement->$view_col)

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
				{!! Form::model($program_requirement, ['route' => [config('laraadmin.adminRoute') . '.program_requirements.update', $program_requirement->id ], 'method'=>'PUT', 'id' => 'program_requirement-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'program')
					@la_input($module, 'requirements')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/program_requirements') }}">Cancel</a></button>
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
	$("#program_requirement-edit-form").validate({
		
	});
});
</script>
@endpush
