  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <x-app-layout>
      <x-slot name="header">
          <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight">
              {{ __('List Data Siswa') }}
          </h2>
      </x-slot>

      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="container" style="display: flex; padding: 10px;">
                  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="flex: 6; padding: 10px;">
                      <a href="{{ route('admin.create') }}"
                          class="btn btn-primary btn-sm"
                          style="padding-left: 1rem; padding-right: 1rem; background-color: #007bff; color: white;"
                          data-mdb-button-init data-mdb-ripple-init>
                          Tambah Data Siswa
                      </a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="flex: 1; padding: 10px;">
                      <a href="{{ route('admin/ekstrakurikuler') }}"
                          class="btn btn-primary btn-sm"
                          style="padding-left: 1rem; padding-right: 1rem; background-color: #28a745; color: white;"
                          data-mdb-button-init data-mdb-ripple-init>
                          List Ekstrakurikuler
                      </a>
                  </div>

              </div>

              <hr />
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
              @endif

              <head>
                  <meta charset="utf-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <title></title>
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
                          <th scope="col">Action</th>
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
                          <td class="align-middle">
                              <!-- Edit Icon -->
                              <a href="{{ route('admin.edit', $datasiswa->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                  <i class="fas fa-edit"></i>
                              </a>
                              <!-- View Detail Icon -->
                              <a href="" class="btn btn-sm btn-info" title="View Details">
                                  <i class="fas fa-eye"></i>
                              </a>
                              <!-- Delete Icon -->
                              <a href="{{ route('admin.delete', $datasiswa->id) }}" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are you sure?')">
                                  <i class="fas fa-trash-alt"></i>
                              </a>
                          </td>
                      </tr>
                      @endforeach

                      @if ($datasiswas->isEmpty())
                      <tr style="text-align: center;">
                          <td colspan="9">No data available</td>
                      </tr>
                      @endif
                  </tbody>

              </table>
          </div>
      </div>

  </x-app-layout>
