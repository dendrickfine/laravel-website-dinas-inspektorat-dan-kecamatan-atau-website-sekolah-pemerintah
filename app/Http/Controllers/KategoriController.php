<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('back.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
        ]);

        // Buat data kategori
        $kategori = Kategori::create([
            'id_kategori' => 'ART-' . Str::random(10), // Generate ID kategori
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori)
        ]);

        // Tampilkan pesan berhasil
        Alert::success('Saved', 'Data Berhasil Disimpan');
        return redirect()->route('kategori.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id_kategori
     * @return \Illuminate\Http\Response
     */
    public function show($id_kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kategori)
    {
        $kategori = Kategori::find($id_kategori);

        return view('back.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kategori)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kategori);

        $kategori = Kategori::findOrFail($id_kategori);
        $kategori->update($data);

        Alert::info('Updated', 'Data Berhasil Diperbarui');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kategori)
    {
        $kategori = Kategori::find($id_kategori);
        $kategori->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
