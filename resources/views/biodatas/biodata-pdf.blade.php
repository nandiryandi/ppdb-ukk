<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Siswa</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Kelas</th>
                <th>Jurusan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($biodata as $biodata)
			<tr>
                <td>{{ $biodata->NIS }}</td>
                <td>{{ $biodata->NAMA }}</td>
                <td>{{ $biodata->Jns_kelamin }}</td>
                <td>{{ $biodata->Temp_lahir }}</td>
                <td>{{ Carbon\Carbon::parse($biodata->Tgl_lahir)->isoFormat('DD MMMM YYYY') }}</td>
                <td>{{ $biodata->Alamat }}</td>
                <td>{{ $biodata->Asal_sekolah }}</td>
                <td>{{ $biodata->Kelas }}</td>
                <td>{{ $biodata->Jurusan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>