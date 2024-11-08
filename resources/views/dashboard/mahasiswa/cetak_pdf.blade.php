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
<h1>Daftar Mahasiswa</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Prodi</th>
        {{-- <th>Aksi</th> --}}
    </tr>
@foreach ($mhs as $mahasiswa)
<tr>
       <td>{{ $loop->iteration }} </td>
       <td> {{ $mahasiswa-> nim }}</td>
        <td>{{ $mahasiswa-> nama }}</td>
        <td>{{ $mahasiswa-> alamat }}</td>
        <td>{{ $mahasiswa-> prodi->nama }}</td>
</tr>
@endforeach
</table>
{{-- {{ $mhs->links() }} --}}
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

