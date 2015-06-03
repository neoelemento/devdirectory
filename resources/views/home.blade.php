@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <div class="alert alert-dd alert-dismissible text-center" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              Hey <strong>{{ Auth::user()->name }}!</strong> Welcome to Dev Directory. So what have you coded today?
            </div>
        </div>
	</div>
</div>
@endsection
