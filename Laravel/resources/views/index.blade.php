<!DOCTYPE html>
<html>
<head>
	<title>Tambah Barang</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Keluhan</td>
			<td><a href="{{url('tambah')}}">Tambah</a><br>

			</td>
		</tr>
		@foreach($kli as $data)
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->nama}}</td>
			<td>{{$data->alamat}}</td>
			<td>{{$data->keluhan}}</td>
			<td><a href="{{url('update',$data->id)}}">Ubah</a>
			<a href="{{url('hapus',$data->id)}}">Hapus</td>
		</tr>
		@endforeach
	</table>





	
</body>
</html>