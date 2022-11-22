<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
        <title>Read Table</title>
    </head>
<body>
<hr>
<br>

<h2> Data Mahasiswa </h2>
<a href=/create class="btn btn-success"> Tambah Data </a>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr> <th> NIM <th> NAMA </th> <th> UMUR </th>
        <th> ALAMAT </th>
        <th> KOTA </th> <th> KELAS </th> <th> JURUSAN </th>
        <th> ACTION </th>
</tr>
</thead>

@foreach ($datanya as $dt)
<tr>
    <td> {{$dt->nim}} </td>
    <td> {{$dt->nama}} </td>
    <td> {{$dt->umur}} </td>
    <td> {{$dt->alamat}} </td>
    <td> {{$dt->kota}} </td>
    <td> {{$dt->kelas}} </td>
    <td> {{$dt->jurusan}} </td>
    <td> <a href=/delete?nim={{$dt->nim}} class="btn btn-danger" onclick="return confirm('yakin data mau di delete ?');"> Hapus</a>
    <a href=/edit?nim={{$dt->nim}} class="btn btn-primary" onclick="return confirm('yakin data mau di edit ?');"> Edit</a>
</td>
</tr>
@endforeach
</table>
</hr>
</body>
</html>