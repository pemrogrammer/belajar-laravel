<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Konversi Nilai</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
	<main class="container">
		<form action="konversi-nilai-1" method="POST">
			<?= csrf_field() ?>
			<label class="form-label">Nilai:</label>
			<input name="nilai_angka" type="number" min="0" max="100" placeholder="Masukan Nilai" class="form-control">
			
			<button class="my-2 btn btn-primary">Submit</button>
		</form>

		<form action="konversi-nilai-2" method="POST">
			<?= csrf_field() ?>
			<label class="form-label">Nilai UTS:</label>
			<input name="nilai_uts" placeholder="Masukan Nilai UTS" class="form-control">

			<label class="form-label">Nilai UAS:</label>
			<input name="nilai_uas" placeholder="Masukan Nilai UAS" class="form-control">
			
			<button class="my-2 btn btn-primary">Submit</button>
		</form>
	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
		crossorigin="anonymous"></script>
</body>
</html>