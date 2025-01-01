<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::latest()->get()->reverse();
        return view('back.artikel.index', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('back.artikel.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['id_artikel'] = 'ART-' . Str::random(10); // Generate a unique string ID
        $data['slug'] = Str::slug($request->judul);
        $data['id_user'] = Auth::id();
        $data['views'] = 1;
        $data['gambar_artikel'] = $request->file('gambar_artikel')->store('artikel');

        Artikel::create($data);
        Alert::success('Saved', 'Data Berhasil Disimpan');
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id_artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);
        $kategori = Kategori::all();

        return view('back.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_artikel)
    {
        // $this->validate($request, [
        //     'judul' => 'required|min:4',
        // ]);
        if (empty($request->file('gambar_artikel'))) {

            $artikel = Artikel::find($id_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'id_kategori' => $request->id_kategori,
                'is_active' => $request->is_active,
                'id_user' => Auth::id(),

            ]);
            Alert::info('Updated', 'Data Berhasil Diperbarui');
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diupdate']);
        } else {
            $artikel = Artikel::find($id_artikel);
            Storage::delete($artikel->gambar_artikel);
            $artikel->update([
                'judul' => $request->judul,
                'body' => $request->body,
                'slug' => Str::slug($request->judul),
                'id_kategori' => $request->id_kategori,
                'is_active' => $request->is_active,
                'id_user' => Auth::id(),
                'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
            ]);
            Alert::info('Updated', 'Data Berhasil Diperbarui');
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diupdate']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_artikel)
    {
        $artikel = Artikel::find($id_artikel);

        Storage::delete($artikel->gambar_artikel);
        $artikel->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
