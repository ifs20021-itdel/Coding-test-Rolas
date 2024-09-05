  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <table class="table">
      <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Depan</th>
              <th scope="col">Nama Belakng</th>
              <th scope="col">Nomor Handphone</th>
              <th scope="col">NIS</th>
              <th scope="col">Alamat</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Foto</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($datasiswas as $datasiswa)
          <tr>
              <td class="align-middle" scope="row">{{ $loop->iteration }}</td>
              <td class="align-middle">{{ $datasiswa->firstname }}</td>
              <td class="align-middle">{{ $datasiswa->secname }}</td>
              <td class="align-middle">{{ $datasiswa->hp }}</td>
              <td class="align-middle">{{ $datasiswa->nis }}</td>
              <td class="align-middle">{{ $datasiswa->alamat }}</td>
              <td class="align-middle">{{ $datasiswa->gender }}</td>
              <td class="align-middle">
                  <img src="{{ asset('storage/foto_siswa/' . $datasiswa->foto) }}" alt="Foto Siswa" width="100">
              </td>
          </tr>
          @endforeach

          @if ($datasiswas->isEmpty())
          <tr>
              <td colspan="8">No data available</td>
          </tr>
          @endif
      </tbody>


  </table>
