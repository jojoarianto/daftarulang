@extends('app')

@section('content')
<div class="container" style="margin-top:120px">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="service-content clean" style="background-color: #bce8f1; border-radius:10px; padding:20px" id="home">
				<h2>Form Daftar Ulang</h2>
				<hr>
				<div class="row">
					<form role="form" method="POST" action="{{ url('/home/form') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="col-md-6" style="text-align:justify; margin-bottom:30px">
							<h4>Data Peserta</h4>
							<hr>
							<div class="form-group">
								<label>Nama Peserta 1</label>
								<input name="nama1" type="text" class="form-control" id="nama1" placeholder="Nama Peserta 1" required>
							</div>
							<div class="form-group">
								<label>Nomor Ponsel Peserta 1</label>
								<input name="nomor1" type="text " class="form-control" id="nomor1" placeholder="Nomor Ponsel Peserta 1" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin Peserta 1</label>
								<select name="jk1" class="form-control" id="kelamin1" required>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label>Nama Peserta 2</label>
								<input name="nama2" type="text" class="form-control" id="nama2" placeholder="Nama Peserta 2" required>
							</div>
							<div class="form-group">
								<label>Nomor Ponsel Peserta 2</label>
								<input name="nomor2" type="text" class="form-control" id="nama1" placeholder="Nomor Ponsel Peserta 2" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin Peserta 2</label>
								<select name="jk2" class="form-control" id="kelamin2" required>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label>Nama Peserta 3</label>
								<input name="nama3" type="text" class="form-control" id="nama1" placeholder="Nama Peserta 3" required>
							</div>
							<div class="form-group">
								<label>Nomor Ponsel 3</label>
								<input name="nomor3" type="text" class="form-control" id="nama1" placeholder="Nomor Ponsel 3" required onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin Peserta 3</label>
								<select name="jk3" class="form-control" id="kelamin3" required>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>

						</div>

						<div class="col-md-6" style="text-align:justify;">
							<h4>Data Guru Pendamping</h4>
							<hr>
							<div class="form-group">
								<label for="sel1">Apakah ada guru pendamping yang ikut mendampingi selama kegiatan Olfar di Surabaya?</label>
								<select class="form-control" id="gurupendamping">
									<option value="0">Ada</option>
									<option value="1">Tidak ada</option>
								</select>
							</div>
							<hr>
							<div id="gpfield">
								<div class="gpfield" style="display: block;">
									<div class="form-group">
										<label>Nama Guru Pendamping</label>
										<input name="namagp" type="text" class="form-control" id="gpnama" placeholder="Nama Guru Pendamping">
									</div>
									<div class="form-group">
										<label>Nomor Guru Pendamping</label>
										<input name="nomorgp" type="text" class="form-control" id="gpnomor" placeholder="Nomor Ponsel Guru Pendamping" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
									</div>
									<div class="form-group">
										<label>Jenis Kelamin Guru Pendamping</label>
										<select name="jkgp" class="form-control" id="gpkelamin">
											<option value="Laki-laki">Laki-laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
									<hr>
								</div>
								<div class="form-group">
									<button id="add_more" class="btn btn-default btn-xs" type="button" style="float:right"><span class="glyphicon glyphicon-plus"></span> Guru Pendamping</button>
								</div>
							</div>
							<input type="submit" class="btn btn-default"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
