<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Data Siswa') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-bootsrap></x-bootsrap>
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <div class="card" style="border-radius: 40px;">
                            <form action="{{ route('admin.update', $datasiswas->id) }}" method="POST" enctype="multipart/form-data" class="form-card">
                                @csrf
                                @method('PUT')
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Nama Depan<span class="text-danger"> *</span></label>
                                        <input type="text" id="firstname" name="firstname" value="{{ old('firstname', $datasiswas->firstname) }}">
                                    </div>
                                    @error('firstname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Nama Belakang<span class="text-danger"> *</span></label>
                                        <input type="text" id="secname" name="secname" value="{{ old('secname', $datasiswas->secname) }}">
                                    </div>
                                    @error('secname')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Nomor Induk Siswa<span class="text-danger"> *</span></label>
                                        <input type="text" id="nis" name="nis" value="{{ old('nis', $datasiswas->nis) }}">
                                    </div>
                                    @error('nis')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Nomor Hp<span class="text-danger"> *</span></label>
                                        <input type="text" id="hp" name="hp" value="{{ old('hp', $datasiswas->hp) }}">
                                    </div>
                                    @error('hp')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Alamat<span class="text-danger"> *</span></label>
                                        <input type="text" id="alamat" name="alamat" value="{{ old('alamat', $datasiswas->alamat) }}">
                                    </div>
                                    @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="form-group col-sm-6 flex-column d-flex">
                                        <label class="form-control-label px-3">Jenis Kelamin<span class="text-danger"> *</span></label>
                                        <select id="gender" name="gender" class="form-control">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="laki-laki" {{ old('gender', $datasiswas->gender) == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                            <option value="perempuan" {{ old('gender', $datasiswas->gender) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        @error('gender')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Ekstrakulikuler<span class="text-danger"> *</span></label> <input type="text" id="ekstrakurikuler" name="ekstrakurikuler" value="{{ old('ekstrakurikuler', $datasiswas->ekstrakurikuler) }}"> </div>

                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Tahun Mulai Mengikuti<span class="text-danger"> *</span></label> <input type="number" id="tahun" name="tahun" value="{{ old('tahun', $datasiswas->tahun) }}"> </div>
                                </div>

                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-12 flex-column d-flex">
                                        <label class="form-control-label px-3">Foto<span class="text-danger"> *</span></label>
                                        <input type="file" id="foto" name="foto">
                                        @if($datasiswas->foto)
                                        <img src="{{ asset('storage/foto_siswa/' . $datasiswas->foto) }}" alt="Foto Siswa" width="100" class="mt-2">
                                        @endif
                                        @error('foto')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                body {
                    color: #000;
                    overflow-x: hidden;
                    height: 100%;
                    background-image: url("https://i.imgur.com/GMmCQHC.png");
                    background-repeat: no-repeat;
                    background-size: 100% 100%;
                }

                .card {
                    padding: 30px 20px;
                    margin-top: -75px;
                    margin-bottom: 20px;
                    border: none !important;
                    box-shadow: 0 6px 12px 5px rgba(0, 0, 0, 0.7);
                }

                .blue-text {
                    color: #00BCD4;
                }

                .form-control-label {
                    margin-bottom: 0;
                }

                input,
                textarea,
                button {
                    padding: 8px 15px;
                    border-radius: 5px !important;
                    margin: 5px 0px;
                    box-sizing: border-box;
                    border: 1px solid #ccc;
                    font-size: 18px !important;
                    font-weight: 300;
                }

                input:focus,
                textarea:focus {
                    -moz-box-shadow: none !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    border: 1px solid #00BCD4;
                    outline-width: 0;
                    font-weight: 400;
                }

                .btn-block {
                    text-transform: uppercase;
                    font-size: 15px !important;
                    font-weight: 400;
                    height: 43px;
                    cursor: pointer;
                }

                .btn-block:hover {
                    color: #fff !important;
                }

                button:focus {
                    -moz-box-shadow: none !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    outline-width: 0;
                }

                /* Jika diperlukan untuk menyesuaikan tombol */
                .button-back {
                    background-color: #1d4ed8;
                    /* Blue-500 */
                    color: #ffffff;
                    padding: 0.5rem 1rem;
                    border-radius: 0.375rem;
                    /* Rounded-md */
                    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
                }

                .button-back:hover {
                    background-color: #2563eb;
                    /* Blue-600 */
                }

                .button-back:focus {
                    outline: 2px solid #3b82f6;
                    /* Blue-500 */
                    outline-offset: 2px;
                }

                .no-underline {
                    text-decoration: none;
                }
            </style>
        </div>
    </div>
</x-app-layout>
