<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Playlist::all();
        return view('back.playlist.index', compact('playlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.playlist.create');

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
            'judul_playlist' => 'required|min:4',
        ]);

            $data = $request->all();
            $data['id_playlist'] = 'ART-' . Str::random(10);
            $data['slug'] = Str::slug($request->judul_playlist);
            $data['id_user']= Auth::id();
            $data['gambar_playlist'] = $request->file('gambar_playlist')->store('playlist');

            Playlist::create($data);
            Alert::success('Saved', 'Data Berhasil Disimpan');
            return redirect()->route('playlist.index')->with(['success'=> 'Data Berhasil Tersimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_playlist
     * @return \Illuminate\Http\Response
     */
    public function show($id_playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_playlist
     * @return \Illuminate\Http\Response
     */
    public function edit($id_playlist)
    {
        $playlist = Playlist::find($id_playlist);

        return view('back.playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_playlist)
    {
    if(empty($request->file('gambar_playlist'))) {
        $playlist = Playlist::find($id_playlist);
        $playlist->update([
            'judul_playlist' => $request->judul_playlist,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul_playlist),
            'is_active' => $request->is_active,
            'user_id'=> Auth::id(),
        ]);
        Alert::info('Updated', 'Data Berhasil Diperbarui');
        return redirect()->route('playlist.index')->with(['success'=> 'Data Berhasil Diupdate']);
    } else {
        $playlist = Playlist::find($id_playlist);
        Storage::delete($playlist->gambar_playlist);  
        $playlist->update([
            'judul_playlist' => $request->judul_playlist,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul_playlist),
            'is_active' => $request->is_active,
            'user_id'=> Auth::id(),
            'gambar_playlist'=> $request->file('gambar_playlist')->store('playlist'),
        ]);
        Alert::info('Updated', 'Data Berhasil Diperbarui');
        return redirect()->route('playlist.index')->with(['success'=> 'Data Berhasil Diupdate']);
    }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_playlist)
    {
        $playlist = Playlist::find($id_playlist);

        Storage::delete($playlist->gambar_playlist);
        $playlist->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('playlist.index')->with(['success'=> 'Data Berhasil Dihapus']);
    }
}
