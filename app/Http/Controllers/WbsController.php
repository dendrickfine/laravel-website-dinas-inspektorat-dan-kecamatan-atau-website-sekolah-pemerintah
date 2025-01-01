<?php

namespace App\Http\Controllers;

use App\Models\Wbs;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class WbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wbs= Wbs::latest()->get()->reverse();
        return view('back.wbs.index',[
            'wbs' => $wbs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.wbs.create');
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
        'nama_pelapor' => 'required|min:1',
        // Tambahkan validasi untuk bidang lain jika diperlukan
    ]);

    $data = $request->all();
    $data['id_wbs'] = 'ART-' . Str::random(10);
    $data['slug'] = Str::slug($request->nama_pelapor);

    // Simpan gambar_ktp jika ada
    if ($request->hasFile('gambar_ktp')) {
        $data['gambar_ktp'] = $request->file('gambar_ktp')->store('wbs');
    }

    // Simpan gambar_bukti jika ada
    if ($request->hasFile('gambar_bukti')) {
        $data['gambar_bukti'] = $request->file('gambar_bukti')->store('wbs');
    }

    // Buat entri baru dalam database
    Wbs::create($data);
    Alert::success('Terima Kasih', 'Data Berhasil Disimpan'); 
    return redirect()->route('wbs.create');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id_wbs
     * @return \Illuminate\Http\Response
     */
    public function show($id_wbs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_wbs
     * @return \Illuminate\Http\Response
     */
    public function edit($id_wbs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_wbs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_wbs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_wbs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_wbs)
    {
        $wbs = Wbs::findOrFail($id_wbs);
        $wbs = Wbs::find($id_wbs);

        Storage::delete($wbs->gambar_bukti);
        Storage::delete($wbs->gambar_ktp);
        $wbs->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('wbs.index')->with(['success'=> 'Data Berhasil Dihapus']);
    }

    public function detail($id_wbs){
        $wbs = Wbs::where('id',$id_wbs)->first();

        return view('back.wbs.detail-wbs',[
        'wbs'=> $wbs
    ]);
    }
}
