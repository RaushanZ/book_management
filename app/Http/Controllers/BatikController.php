<?php

namespace App\Http\Controllers;

use App\Models\Batik;
// use Illuminate\Container\Attributes\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BatikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batiks = Batik::all();
        return view('Dashboard.index', compact('batiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'picture' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // gambar bersifat opsional
            'name' => 'required',
            'asal' => 'required',
            'deskripsi' => 'required',
            'harga_terendah' => 'required',
            'harga_tertinggi' => 'required',
        ]);

        // Memastikan file berhasil diunggah atau kosong
        $imgname = null; // Default jika tidak ada gambar yang diunggah

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imgname = date('dmyHis') . '.' . $file->extension();
            // $file->storeAs('public', $imgname); 
            Storage::disk('public')->putFileAs('', $file, $imgname);
        }

        // Menyimpan data ke database
        Batik::create([
            'picture' => $imgname, // Nilai ini bisa null jika tidak ada gambar
            'name' => $request->name,
            'asal' => $request->asal,
            'deskripsi' => $request->deskripsi,
            'harga_terendah' => $request->harga_terendah,
            'harga_tertinggi' => $request->harga_tertinggi,
        ]);

        return redirect()->route('dashboard.index');
    }




    /**
     * Display the specified resource.
     */
    public function show(Batik $batik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batik $batik)
    {
        return view('dashboard.edit', compact('batik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batik $batik)
    {
        $request->validate([
            'name' => 'required',
            'asal' => 'required',
            'deskripsi' => 'required',
            'harga_terendah' => 'required',
            'harga_tertinggi' => 'required',
            'picture' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $imgname = $batik->picture; // Menggunakan gambar lama jika tidak ada yang baru

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $imgname = date('dmyHis') . '.' . $file->extension();

            // Hapus gambar lama dari storage, jika ada
            if ($batik->picture) {
                Storage::delete('public/' . $batik->picture);
            }

            // Simpan gambar baru
            Storage::disk('public')->putFileAs('', $file, $imgname);
        }

        // Update data di database
        $batik->update([
            'picture' => $imgname,
            'name' => $request->name,
            'asal' => $request->asal,
            'deskripsi' => $request->deskripsi,
            'harga_terendah' => $request->harga_terendah,
            'harga_tertinggi' => $request->harga_tertinggi,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data batik berhasil diperbarui');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $batik = Batik::findOrFail($id);
        $batik->delete();
        if ($batik->picture) {
            Storage::disk('public')->delete($batik->picture); // Hapus gambar di storage/app/public
        }
        return redirect()->route('dashboard.index');
    }
}