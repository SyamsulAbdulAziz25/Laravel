<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	@foreach($klin as $pecah)
	<form action="{{url('ubahdata',$pecah->id)}}" method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<th>Id</th>
				<th>:</th>
				<td><input type="text" name="id" value="{{$pecah->id}}" readonly=""></td>
			</tr>
			<tr>
				<th>Nama</th>
				<th>:</th>
				<td><input type="text" name="nama_ubah" value="{{$pecah->nama}}"></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<th>:</th>
				<td><input type="text" name="alamat_ubah" value="{{$pecah->alamat}}"></td>
			</tr>
			<tr>
				<th>Keluhan</th>
				<th>:</th>
				<td><input type="text" name="keluhan_ubah" value="{{$pecah->keluhan}}"></td>
			</tr>
			<tr>
				<td><button type="submit">UBAH</button></td>
			</tr>
			@endforeach
		</table>
	</form>
</body>
</html>