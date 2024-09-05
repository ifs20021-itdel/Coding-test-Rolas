<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\DataSiswa;
use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datasiswas = DataSiswa::all();
        return view('admin.index', ['datasiswas' => $datasiswas]);
    }

    public function index2(){
        return view('admin/ekstrakurikuler');
    }

    public function show2()
    {
        $datasiswas = DataSiswa::all();
        return view('admin/ekstrakurikuler', ['datasiswas' => $datasiswas]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input termasuk file foto
        $validate = $request->validate([
            'firstname' => 'required',
            'secname' => 'required',
            'hp' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ekstrakurikuler' => 'nullable',
            'tahun' => 'nullable',
             // Validasi untuk file foto
        ]);

        // Proses upload file
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); // Beri nama unik pada file
            $path = $file->storeAs('public/foto_siswa', $filename); // Simpan file ke direktori storage/public/foto_siswa

            // Tambahkan nama file ke dalam array data yang akan disimpan
            $validate['foto'] = $filename;
        }
        // Simpan data ke dalam database
        $data = DataSiswa::create($validate);

        // Periksa apakah data berhasil disimpan
        if ($data) {
            session()->flash('success', 'Data siswa berhasil ditambahkan!');
            return redirect(route('admin.index'));
        } else {
            session()->flash('error', 'Data siswa gagal ditambahkan!');
            return redirect(route('admin.create'));
        }
    }


    /**
     * Display the specified resource.
     */
        public function show()
        {
            return view ('admin/ekstrakurikuler');
        }

    // public function show(string $id)
    // {
    //     return view('admin/ekstrakurikuler');
    // }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datasiswas = DataSiswa::findOrFail($id);
        return view('admin.update', ['datasiswas' => $datasiswas]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datasiswas = DataSiswa::findOrFail($id);
        $validate = $request->validate([
            'firstname' => 'required',
            'secname' => 'required',
            'hp' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk file foto
            'ekstrakurikuler' => 'nullable',
            'tahun' => 'nullable',
        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName(); // Beri nama unik pada file
            $path = $file->storeAs('public/foto_siswa', $filename); // Simpan file ke direktori storage/public/foto_siswa
            $validate['foto'] = $filename;
        }
        $datasiswas->update($validate);
        session()->flash('success', 'Data siswa berhasil diupdate!');
        return redirect(route('admin.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datasiswas = DataSiswa::findOrFail($id);
        $datasiswas->delete();
        session()->flash('success', 'Data siswa berhasil dihapus!');
        return redirect(route('admin.index'));
    }
}
