<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan = Iklan::all();
        return view('back.iklan.index', compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.iklan.create');
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
            'judul' => 'required|min:4',
            'gambar_iklan'=> 'mimes:png,jpg,jpeg,gif,bmp,svg,webp'
        ]);

        if (!empty($request->file('gambar_iklan'))) {
            $data = $request->all();
            $data['id_iklan'] = 'ART-' . Str::random(10); 
            $data['gambar_iklan']= $request->file('gambar_iklan')->store('iklan');

            Iklan::create($data);
            Alert::success('Saved', 'Data Berhasil Disimpan');
            return redirect()->route('iklan.index')->with('success','Data Berhasil Disimpan');
        } else {
            $data = $request->all();
            Iklan::create($data);
            Alert::success('Saved', 'Data Berhasil Disimpan');
            return redirect()->route('iklan.index')->with('success','Data Berhasil Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_iklan
     * @return \Illuminate\Http\Response
     */
    public function show($id_iklan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_iklan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_iklan)
    {
        $iklan = Iklan::find($id_iklan);

        return view('back.iklan.edit', compact('iklan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_iklan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_iklan)
    {
        if (!empty($request->file('gambar_iklan'))) {
            $data = $request->all();
            $data['gambar_iklan'] = $request->file('gambar_iklan')->store('iklan');

            $iklan = Iklan::findOrFail($id_iklan);
            Storage::delete($iklan->gambar_iklan);
            $iklan->update($data);
            Alert::info('Updated', 'Data Berhasil Diperbarui'); 
            return redirect()->route('iklan.index')->with('success','Data Berhasil Diupdate');
        } else {
            $data = $request->all();

            $iklan = Iklan::findOrFail($id_iklan);
            $iklan->update($data);
            Alert::info('Updated', 'Data Berhasil Diperbarui'); 
            return redirect()->route('iklan.index')->with('success','Data Berhasil Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_iklan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_iklan)
    {
        $iklan = Iklan::find($id_iklan);

        Storage::delete($iklan->gambar_iklan);
        $iklan->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('iklan.index')->with(['success'=> 'Data Berhasil Dihapus']);
    }
}
