@extends('app')

@section('content')
<div class="container-fluid" style="margin-top:200px">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default" style="border-color:white">
				<div class="panel-body">

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<h4>Atur Ulang Password</h4>
							<hr>
							@if (session('status'))
							<div class="alert alert-success">
								{{ session('status') }}
							</div>
							@endif

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
							<label class="">Masukkan E-Mail anda</label>
							
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								Kirim E-Mail
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
