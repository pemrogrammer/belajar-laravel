<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pendaftar</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


	<!-- <style>
		table, th, td {
		border: 1px solid;
		}
	</style> -->
</head>
<body>

	<div class="container">
		<h1 class="my-5">Data Pendaftar</h1>

		<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo $request_pass->name ?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><?php echo $request_pass->birthPlace ?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $request_pass->birthDate ?></td>
			</tr>
			<tr>
				<td>Kewarganegaraan</td>
				<td>:</td>
				<td><?= $request_pass->citizenship ?></td>
			</tr>

			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?= $request_pass->religion ?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?= $request_pass->email ?></td>
			</tr>

			<tr>
				<td>NO. Telp</td>
				<td>:</td>
				<td><?= $request_pass->phone ?></td>
			</tr>

			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><?= $request_pass->nik ?></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?= $request_pass->gender ?></td>
			</tr>

			<tr>
				<td>Nama Ibu Kandung</td>
				<td>:</td>
				<td><?= $request_pass->motherName ?></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><?= implode($request_pass->hobby, ", ") ?></td>
			</tr>
		</table>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
</body>
</html>