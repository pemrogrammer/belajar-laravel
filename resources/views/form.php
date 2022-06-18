<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FORM PENDAFTARAN MAHASISWA BARU</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
</head>

<body>

	<div class="container">
		<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>

		<form action="submit" method="POST">
			<input type="hidden" name="_token" value="<?= csrf_token() ?>">

			<div class="alert alert-primary mt-5" role="alert">
				Data Diri
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="name">Nama Lengkap</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="">
					</div>


					<div class="row">
						<div class="form-group col-md-6">
							<label for="birthPlace">Tempat Lahir</label>
							<input type="text" name="birthPlace" class="form-control" id="birthPlace" placeholder="">
						</div>

						<div class="form-group col-md-6">
							<label for="birthDate">Tanggal Lahir Lahir</label>
							<input type="date" name="birthDate" class="form-control" id="birthDate" placeholder="">
						</div>

						<div class="form-group col-md-6">
							<label for="citizenship">Kewarganegaraan</label>


							<div class="form-check">
								<input class="form-check-input" type="radio" name="citizenship" id="citizenship-WNA"
									value="WNA">
								<label class="form-check-label" for="citizenship-WNA">
									WNA
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="citizenship" id="citizenship-WNI"
									value="WNI">
								<label class="form-check-label" for="citizenship-WNI">
									WNI
								</label>
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="religion">Agama</label>
							<select class="form-control" name="religion" id="religion">
								<option>Islam</option>
								<option>Protestan</option>
								<option>Katolik</option>
								<option>Hindu</option>
								<option>Budha</option>
								<option>Lainnya</option>
							</select>
						</div>

						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="">
						</div>

						<div class="form-group col-md-6">
							<label for="phone">NO. TELP</label>
							<input type="tel" name="phone" class="form-control" id="phone" placeholder="">
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" name="nik" class="form-control" id="nik" placeholder="">
					</div>

					<div class="form-group">
						<label for="gender">Jenis Kelamin</label>


						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender-1" value="Laki-Laki">
							<label class="form-check-label" for="gender-1">
								Laki-Laki
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender-2" value="perempuan">
							<label class="form-check-label" for="gender-2">
								Perempuan
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="motherName">Nama Ibu Kandung</label>
						<input type="text" name="motherName" class="form-control" id="motherName" placeholder="">
					</div>

					<div class="form-group col-md-6">
						<label for="hobby">Hobi</label>


						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-1" value="Olahraga">
							<label class="form-check-label" for="hobby-1">
								Olahraga
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-2" value="tari">
							<label class="form-check-label" for="hobby-2">
								Tari
							</label>
						</div>


						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-3" value="Musik">
							<label class="form-check-label" for="hobby-3">
								Musik
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-4"
								value="Travelling">
							<label class="form-check-label" for="hobby-4">
								Travelling
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-5" value="Membaca">
							<label class="form-check-label" for="hobby-5">
								Membaca
							</label>
						</div>


						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="hobby-6" onchange="document.getElementById('hobbyLainnya').toggleAttribute('disabled')">
							<input class="form-control" type="text" name="hobby[]" id="hobbyLainnya" value="" disabled>
						</div>

					</div>
				</div>



			</div>

			<div class="alert alert-primary mt-5" role="alert">
				Data Alamat Asal
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Alamat:</label>
					<textarea name="address" class="form-control" rows="5"></textarea>
				</div>

				<div class="col-md-4">
					<label>Kode Pos</label>
					<input type="text" name="zip" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Provinsi</label>
					<select class="form-control" name="province">
						<option>Kalimantan Timur</option>
						<option>Kalimantan Utara</option>
						<option>Kalimantan Selatan</option>
						<option>Kalimantan Barat</option>
						<option>Kalimantan Tengah</option>
					</select>
				</div>


			</div>

			<div class="alert alert-primary mt-5" role="alert">
				Data Pendidikan
			</div>

			<div class="row">
				<div class="col-md-4">
					<label>Pendidikan Terakhir</label>
					<select name="lastEdu" class="form-control">
						<option>SMA - IPA</option>
						<option>SMA - IPS</option>
						<option>SMA - Bahasa</option>
						<option>SMK</option>
					</select>
				</div>

				<div class="col-md-4">
					<label>Nama Sekolah</label>
					<input name="schoolName" class="form-control">
				</div>

				<div class="col-md-4">
					<label>Rata-Rata Nilai Kelas 12</label>
					<input name="avgScore" class="form-control">
				</div>
			</div>

			<div class="alert alert-primary mt-5" role="alert">
				Pilihan Program Studi
			</div>

			<div class="row">
				<div class="col-md-4">
					<label for="">Program Studi 1</label>
					<select name="prodi1" class="form-control">

						<optgroup label="Teknik Elektro">
							<option>Teknik Elektro</option>
						</optgroup>

						<optgroup label="Kimia">
							<option>Teknik Kimia</option>
						</optgroup>

						<optgroup label="Pariwisata">
							<option>Pariwisata</option>
							<option>Perhotelan</option>
							<option>Travel</option>
						</optgroup>

						<optgroup label="Teknologi Informasi">
							<option>Teknik Informatika</option>
							<option>Teknik Komputer</option>

						</optgroup>

						<optgroup label="Administrasi Bisnis">
							<option>Manajemen Pemasaran</option>
							<option>Administrasi Bisnis (Niaga)</option>
						</optgroup>

						<optgroup label="Teknik Sipil">
							<option>Teknik Sipil</option>
						</optgroup>

						<optgroup label="Akuntansi">
							<option>Akuntansi</option>
						</optgroup>

						<optgroup label="Teknik Mesin">
							<option>Teknik Mesin</option>
						</optgroup>

					</select>
				</div>

				<div class="col-md-4">
					<label for="">Program Studi 2</label>
					<select name="prodi2" class="form-control">

						<optgroup label="Teknik Elektro">
							<option>Teknik Elektro</option>
						</optgroup>

						<optgroup label="Kimia">
							<option>Teknik Kimia</option>
						</optgroup>

						<optgroup label="Pariwisata">
							<option>Pariwisata</option>
							<option>Perhotelan</option>
							<option>Travel</option>
						</optgroup>

						<optgroup label="Teknologi Informasi">
							<option>Teknik Informatika</option>
							<option>Teknik Komputer</option>

						</optgroup>

						<optgroup label="Administrasi Bisnis">
							<option>Manajemen Pemasaran</option>
							<option>Administrasi Bisnis (Niaga)</option>
						</optgroup>

						<optgroup label="Teknik Sipil">
							<option>Teknik Sipil</option>
						</optgroup>

						<optgroup label="Akuntansi">
							<option>Akuntansi</option>
						</optgroup>

						<optgroup label="Teknik Mesin">
							<option>Teknik Mesin</option>
						</optgroup>

					</select>
				</div>

			</div>



			<button class="btn btn-primary my-5">Daftar</button>
			<button type="reset" class="btn btn-secondary">Reset</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>


</body>

</html>