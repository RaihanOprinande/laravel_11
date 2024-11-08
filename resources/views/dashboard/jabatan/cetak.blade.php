<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>
            Generate PDF
        </title>
    </head>
    <body>
{{-- <a href="/mhs-index/create" class="btn btn-primary mb-2">Add Mahasiswa</a> --}}
<h1>Daftar Jabatan</h1>
<table border="1" cellpadding="4" cellspacing="0" class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Kode Jabatan</th>
        <th>Nama Jabatan</th>
        <th>Keterangan</th>
        {{-- <th>Prodi</th> --}}
        {{-- <th>Aksi</th> --}}
    </tr>
@foreach ($jbt as $jabatan)
<tr>
       <td>{{ $loop->iteration }} </td>
       <td> {{ $jabatan-> kode_jabatan }}</td>
        <td>{{ $jabatan-> nama_jabatan }}</td>
        <td>{{ $jabatan-> keterangan }}</td>
        {{-- <td>{{ $jabatan-> prodi->nama }}</td> --}}
</tr>
@endforeach
</table>
{{-- {{ $mhs->links() }} --}}
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

