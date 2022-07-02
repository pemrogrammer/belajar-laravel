@extends('layouts.main')

@section('title', 'FORM PENDAFTARAN MAHASISWA BARU')

@section('main-content')
	<div class="container">
		<h1>FORM PENDAFTARAN MAHASISWA BARU</h1>

		<form action="{{ $new_student->exists ? Route('new-students.update', $new_student->id) : Route('new-students.store') }}" method="POST">
			<input type="hidden" name="_token" value="<?= csrf_token() ?>">

      @if ($new_student->exists)  
        <input type="hidden" name="_method" value="PUT">
      @endif



			<div class="alert alert-primary mt-5" role="alert">
				Data Diri
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="name">Nama Lengkap</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="" value="{{ $new_student->name }}">
					</div>


					<div class="row">
						<div class="form-group col-md-6">
							<label for="birthPlace">Tempat Lahir</label>
							<input type="text" name="birthPlace" class="form-control" id="birthPlace" placeholder="" value="{{ $new_student->birth_place }}">
						</div>

						<div class="form-group col-md-6">
							<label for="birthDate">Tanggal Lahir Lahir</label>
							<input type="date" name="birthDate" class="form-control" id="birthDate" placeholder="" value="{{ $new_student->birth_date }}">
						</div>

						<div class="form-group col-md-6">
							<label for="citizenship">Kewarganegaraan</label>


							<div class="form-check">
								<input class="form-check-input" type="radio" name="citizenship" id="citizenship-WNA"
									value="WNA" @if($new_student->citizenship == 'WNA') checked @endif>
								<label class="form-check-label" for="citizenship-WNA">
									WNA
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="citizenship" id="citizenship-WNI"
									value="WNI" @if($new_student->citizenship == 'WNI') checked @endif>
								<label class="form-check-label" for="citizenship-WNI" >
									WNI
								</label>
							</div>
						</div>

						<div class="form-group col-md-6">
							<label for="religion">Agama</label>
							<select class="form-control" name="religion" id="religion">
								@foreach(['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Lainnya'] as $option)
									<option @if($option == $new_student->religion) selected @endif >{{ $option }}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" id="email" placeholder="" value="{{ $new_student->email }}">
						</div>

						<div class="form-group col-md-6">
							<label for="phone">NO. TELP</label>
							<input type="tel" name="phone" class="form-control" id="phone" placeholder="" value="{{ $new_student->phone }}">
						</div>

					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="nik">NIK</label>
						<input type="text" name="nik" class="form-control" id="nik" placeholder="" value="{{ $new_student->id_no }}">
					</div>

					<div class="form-group">
						<label for="gender">Jenis Kelamin</label>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender-1" value="Laki-Laki" @if($new_student->gender == 'Laki-Laki') checked @endif>
							<label class="form-check-label" for="gender-1">
								Laki-Laki
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="gender" id="gender-2" value="perempuan" @if($new_student->gender == 'perempuan') checked @endif>
							<label class="form-check-label" for="gender-2">
								Perempuan
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="motherName">Nama Ibu Kandung</label>
						<input type="text" name="motherName" class="form-control" id="motherName" placeholder="" value="{{ $new_student->mother_name }}">
					</div>

					<div class="form-group col-md-6">
						<label for="hobby">Hobi</label>

            <?php $hobbies = json_decode($new_student->hobbies_json) ?: [] ?>


						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-1" value="Olahraga" @if(in_array('Olahraga', $hobbies)) checked @endif>
							<label class="form-check-label" for="hobby-1">
								Olahraga
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-2" value="tari" @if(in_array('tari', $hobbies)) checked @endif>
							<label class="form-check-label" for="hobby-2">
								Tari
							</label>
						</div>


						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-3" value="Musik" @if(in_array('Musik', $hobbies)) checked @endif>
							<label class="form-check-label" for="hobby-3">
								Musik
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-4"
								value="Travelling" @if(in_array('Travelling', $hobbies)) checked @endif>
							<label class="form-check-label" for="hobby-4">
								Travelling
							</label>
						</div>

						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="hobby[]" id="hobby-5" value="Membaca" @if(in_array('Membaca', $hobbies)) checked @endif>
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
					<textarea name="address" class="form-control" rows="5">
            {{ $new_student->address }}
          </textarea>
				</div>

				<div class="col-md-4">
					<label>Kode Pos</label>
					<input type="text" name="zip" class="form-control" value="{{ $new_student->zip }}">
				</div>

				<div class="col-md-4">
					<label>Provinsi</label>
					<select class="form-control" name="province">
            @foreach(['Kalimantan Timur', 'Kalimantan Utara', 'Kalimantan Selatan', 'Kalimantan Barat', 'Kalimantan Tengah'] as $prov)
  						<option @if ($prov == $new_student->prov)
                selected
              @endif>{{ $prov }}</option>
            @endforeach
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
            @foreach(['SMA - IPA', 'SMA - IPS', 'SMA - Bahasa', 'SMK'] as $last_edu)
  						<option @if ($last_edu == $new_student->last_edu)
                  
              @endif >{{ $last_edu }}</option>
            @endforeach
					</select>
				</div>

				<div class="col-md-4">
					<label>Nama Sekolah</label>
					<input name="schoolName" class="form-control" value="{{ $new_student->school_name }}">
				</div>

				<div class="col-md-4">
					<label>Rata-Rata Nilai Kelas 12</label>
					<input name="avgScore" class="form-control" value="{{ $new_student->avg_score }}">
				</div>
			</div>

			<div class="alert alert-primary mt-5" role="alert">
				Pilihan Program Studi
			</div>

      <?php
        $jurusans = [
          "Teknik Elektro" => [
            "Teknik Elektro"
          ], "Kimia" => [
            "Teknik Kimia"
          ], "Pariwisata" => [
            "Pariwisata",
            "Perhotelan",
            "Travel"
          ], "Teknologi Informasi" => [
            "Teknik Informatika",
						"Teknik Komputer"
          ], "Administrasi Bisnis" => [
            "Manajemen Pemasaran",
            "Administrasi Bisnis (Niaga)",
          ], "Teknik Sipil" => [
            "Teknik Sipil"
          ], "Akuntansi" => [
            "Akuntansi"
          ], "Teknik Mesin" => [
            "Teknik Mesin"
          ]
    ];

      ?>

			<div class="row">
				<div class="col-md-4">
					<label for="">Program Studi 1</label>
					<select name="prodi1" class="form-control">
            @foreach($jurusans as $jurusan => $program_studies)
	  					<optgroup label="{{ $jurusan }}">
                @foreach($program_studies as $program_studi)
                  <option @if ($program_studi == $new_student->study_program_1)
                    selected                      
                  @endif>{{ $program_studi }}</option>
                @endforeach
               </optgroup>
            @endforeach


					</select>
				</div>

				<div class="col-md-4">
					<label for="">Program Studi 2</label>
					<select name="prodi2" class="form-control">

						@foreach($jurusans as $jurusan => $program_studies)
	  					<optgroup label="{{ $jurusan }}">
                @foreach($program_studies as $program_studi)
                  <option @if ($program_studi == $new_student->study_program_2)
                    selected                      
                  @endif>{{ $program_studi }}</option>
                @endforeach
               </optgroup>
            @endforeach

					</select>
				</div>

			</div>



			<button class="btn btn-primary my-5">{{ $new_student->exists ?  "Update" : "Daftar" }}</button>
			<button type="reset" class="btn btn-secondary">Reset</button>
		</form>
	</div>
@endsection