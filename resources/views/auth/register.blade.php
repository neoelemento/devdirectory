@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default public-form">
				<div class="panel-heading text-center">Register on Dev Directory</div>
				<div class="panel-body">
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

					<form class="" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" class="form-control" name="name" value="{{ old('name') }}">
						</div>

						<div class="form-group">
							<label class="control-label">E-Mail Address</label>
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control" name="password">
						</div>

						<div class="form-group">
							<label class="control-label">Confirm Password</label>
							<input type="password" class="form-control" name="password_confirmation">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-dd btn-lg btn-block">
								Register
							</button>
							<a class="btn btn-link" href="{{ url('/auth/login') }}">Already registered?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
