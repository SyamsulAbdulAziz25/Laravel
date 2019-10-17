<!DOCTYPE html>
<html>
<head>
	<title>Data Kecamatan</title>
</head>
<body>
	<form action="{{url('insert')}}" method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<th>Id Pasien</th>
				<th>:</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>Nama Pasien</th>
				<th>:</th>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<th>Alamat </th>
				<th>:</th>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<th>Keluhan</th>
				<th>:</th>
				<td><input type="text" name="keluhan"></td>
			</tr>
			<tr>
				<td><button type="submit">SIMPAN</button></td>
			</tr>
		</table>
	</form>
</body>
</html>