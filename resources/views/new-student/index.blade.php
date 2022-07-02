@extends('layouts.main')

@section('title', 'Calon Mahasiswa Baru')


@section('main-content')


	<h1 class="mt-5">Calon Mahasiswa Baru</h1>
	
	<a href="{{ route('new-students.create') }}" class="btn btn-primary mt-2">Tambah Data</a>

	<table class="table mt-2">
		<thead>
			<th>Nama</th>
			<th>TGL. Lahir</th>
			<th>Tempat Lahir</th>
			<th></th>
		</thead>
		<tbody>

			@foreach($new_students as $new_student)
				<tr>
					<td>{{ $new_student->name }}</td>
					<td>{{ $new_student->birth_date }}</td>
					<td>{{ $new_student->birth_place }}</td>
					<td>
						<a href="{{ route('new-students.edit', $new_student->id) }}" class="btn btn-primary">Edit</a>
						<button class="btn btn-secondary">Delete</button>
					</td>
				</tr>
			@endforeach
			
			<?php
			// TANPA BLADE
			//
			// foreach ($new_students as $new_student) {
			// 	echo '<tr>';
			// 	echo '<td>', $new_student->name, '</td>';
			// 	echo '<td>', $new_student->birth_date, '</td>';
			// 	echo '<td>', $new_student->birth_place, '</td>';
			// 	echo '<td><button>Edit</button><button>Delete</button></td>';
			// 	echo '<tr>';
			// }
			?>
		</tbody>
	</table>
	
@endsection