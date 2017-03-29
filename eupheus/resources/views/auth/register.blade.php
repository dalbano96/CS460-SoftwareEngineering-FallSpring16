@extends('la.layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>{{ LAConfigs::getByKey('sitename_part1') }} </b>{{ LAConfigs::getByKey('sitename_part2') }}</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
            <p class="login-box-msg">Create an account</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

								<div class="form-group has-feedback">
									<select required name="gender" class="form-control">
										<option disabled selected value>Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>

								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="Mobile number" name="mobile"/>
								</div>

								<div class="form-group has-feedback">
                  <input type="text" class="form-control" placeholder="Address" name="address"/>
                </div>

								<div class="form-group has-feedback">
									<input type="text" class="form-control" placeholder="City" name="city"/>
								</div>

								<div class="form-group has-feedback">
									<span>Date of Birth</span>
									<input type="date" class="form-control" placeholder="Date" name="date"/>
								</div>

								<div class="form-group has-feedback">
              		<select name="program_id" class="form-control">
										<option disabled selected value>Select Program</option>
										<option value="1">Master of Arts in Counseling Psychology</option>
										<option value="2">Doctor of Nursing Practice</option>
										<option value="3">Teaching MAT</option>
										<option value="4">Master of Education</option>
										<option value="5">MA Heritage Management</option>
										<option value="6">MS Environmental Science</option>
										<option value="7">Master of Hawaiian Language</option>
										<option value="8">MA Indigenous Language and Culture</option>
										<option value="9">PhD Hawaiian Indigenous Language</option>
										<option value="10">Kahuawaiola Indigenous Teacher Education</option>	
									</select>
								</div>

                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div><!-- /.col -->
                </div>
            </form>

            @include('auth.partials.social_login')
            <hr>
            <center><a href="{{ url('/login') }}" class="text-center">Login</a></center>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('la.layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
