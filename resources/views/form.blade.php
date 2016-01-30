@extends('app')

@section('content')
<div class="container" style="margin-top:120px">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="service-content clean" style="background-color: #bce8f1; border-radius:10px; padding:20px" id="home">
				<h2>Form Daftar Ulang</h2>
				<hr>
				<div class="row">
					<div class="col-md-6" style="text-align:justify; margin-bottom:30px">
						<h4>Data Peserta</h4>
						<hr>
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Peserta 1</label>
								<input type="text" class="form-control" id="nama1" placeholder="Nama Peserta 1">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nomor Ponsel Peserta 1</label>
								<input type="text" class="form-control" id="nomor1" placeholder="Nomor Ponsel Peserta 1">
							</div>
							<div class="form-group">
								<label for="sel1">Jenis Kelamin Peserta 1</label>
								<select class="form-control" id="kelamin1">
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Peserta 2</label>
								<input type="text" class="form-control" id="nama1" placeholder="Nama Peserta 2">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nomor Ponsel Peserta 2</label>
								<input type="text" class="form-control" id="nama1" placeholder="Nomor Ponsel Peserta 2">
							</div>
							<div class="form-group">
								<label for="sel1">Jenis Kelamin Peserta 2</label>
								<select class="form-control" id="kelamin2">
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Peserta 3</label>
								<input type="text" class="form-control" id="nama1" placeholder="Nama Peserta 3">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nomor Ponsel 3</label>
								<input type="text" class="form-control" id="nama1" placeholder="Nomor Ponsel 3">
							</div>
							<div class="form-group">
								<label for="sel1">Jenis Kelamin Peserta 3</label>
								<select class="form-control" id="kelamin3">
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</form>

					</div>

					<div class="col-md-6" style="text-align:justify;">
						<h4>Data Guru Pendamping</h4>
						<hr>
						<form>
							<div class="form-group">
								<label for="sel1">Apakah ada guru pendamping yang ikut mendampingi selama kegiata Olfar di Surabaya?</label>
								<select class="form-control" id="gurupendamping">
									<option value="1">Ada</option>
									<option value="2">Tidak ada</option>
								</select>
							</div>
							<div id="field">
								<div class="form-group">
									<label>Nama Guru Pendamping 1</label>
									<input type="text" class="form-control" id="gpnama1" placeholder="Nama Guru Pendamping 1">
								</div>
								<div class="form-group">
									<label>Nomor Guru Pendamping 1</label>
									<input type="text" class="form-control" id="gpnomor1" placeholder="Nomor Ponsel Guru Pendamping 1">
								</div>
								<div class="form-group">
									<label>Jenis Kelamin Guru Pendamping 1</label>
									<select class="form-control" id="gpkelamin3">
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/>
								<button id="b1" class="btn btn-default btn-xs add-more" type="button">Tambah Guru Pendamping</button>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
