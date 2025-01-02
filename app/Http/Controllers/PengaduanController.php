<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan=Pengaduan::latest()->get()->reverse();
        return view('back.pengaduan.index',[
            'pengaduan' => $pengaduan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.pengaduan.create');
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
        'nama' => 'required|min:1',
    ]);

    $data = $request->all();
    $data['id_pengaduan'] = 'ART-' . Str::random(10);
    $data['slug'] = Str::slug($request->nama);
    
    if ($request->hasFile('gambar_bukti')) {
        $data['gambar_bukti'] = $request->file('gambar_bukti')->store('pengaduan');
    }
    
    Pengaduan::create($data);
    Alert::success('Terima Kasih', 'Data Berhasil Disimpan'); 
    return redirect()->route('pengaduan.create');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show($id_pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pengaduan)
    {
        $pengaduan = Pengaduan::find($id_pengaduan);

        Storage::delete($pengaduan->gambar_bukti);
        $pengaduan->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('pengaduan.index')->with(['success'=> 'Data Berhasil Dihapus']);
    }
    public function detail($id_pengaduan){
        $pengaduan = Pengaduan::where('id_pengaduan',$id_pengaduan)->first();

        return view('back.pengaduan.detail-pengaduan',[
        'pengaduan'=> $pengaduan
    ]);
    }
}
