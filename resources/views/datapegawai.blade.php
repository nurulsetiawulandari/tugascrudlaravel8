<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>CRUD LARAVEL 8</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Data Pegawai</h1>
    <div class="container">
        <a href="/tambahpegawai" class="btn btn-success">Tambah + </a>
    <div class="row">
      @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
      @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>

            <tbody>
              @php 
                $no = 1; 
              @endphp
              @foreach($data as $row)
                  <tr>
                      <th scope="row">{{ $no++ }}</th>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->jeniskelamin}}</td>
                      <td>0{{$row->notelpon}}</td>
                      <td>{{$row->created_at->diffForHumans() }}</td>
                      <td>
                          <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                          <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a>
                      </td> 
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
  </div>
</body>
</html>