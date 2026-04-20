<?php

namespace App\Http\Controllers;

use App\Models\TanamanHias;
use Illuminate\Http\Request;

class TanamanHiasController extends Controller
{
    // 🔹 Tampilkan semua data
    public function index()
    {
        $data = TanamanHias::all();
        return view('tanaman_hias.index', compact('data'));
    }

    // 🔹 Form tambah data
    public function create()
    {
        return view('tanaman_hias.create');
    }

    // 🔹 Simpan data (MODERN)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_tanaman' => 'required',
            'jenis_tanaman' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'ukuran' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image'
        ]);

        // upload foto (versi modern)
        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('foto_tanaman', 'public');
        }

        TanamanHias::create($validated);

        return redirect()->route('tanaman_hias.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    // 🔹 Form edit data
    public function edit($id)
    {
        $data = TanamanHias::findOrFail($id);
        return view('tanaman_hias.edit', compact('data'));
    }

    // 🔹 Update data (MODERN)
    public function update(Request $request, $id)
    {
        $data = TanamanHias::findOrFail($id);

        $validated = $request->validate([
            'nama_tanaman' => 'required',
            'jenis_tanaman' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'ukuran' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')
                ->store('foto_tanaman', 'public');
        }

        $data->update($validated);

        return redirect()->route('tanaman_hias.index')
            ->with('success', 'Data berhasil diupdate');
    }

    // 🔹 Hapus data
    public function destroy($id)
    {
        $data = TanamanHias::findOrFail($id);
        $data->delete();

        return redirect()->route('tanaman_hias.index')
            ->with('success', 'Data berhasil dihapus');
    }
}