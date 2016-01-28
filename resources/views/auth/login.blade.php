@extends('app')

@section('content')
<div class="container-fluid" style="margin-top:150px">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default" style="border-color:white">
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
						<h4>LOGIN</h4>
						<hr>
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
							<label class="">E-Mail</label>
							
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label class="">Password</label>
							
							<input type="password" class="form-control" name="password">
						</div>

						<div class="form-group">
							
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Ingat saya
								</label>
							</div>
							
						</div>

						<div class="form-group">
						
							<button type="submit" class="btn btn-primary">Login</button>

							<a class="btn btn-link" href="{{ url('/password/email') }}">Lupa password?</a>
						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
