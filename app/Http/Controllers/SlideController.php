<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slide = Slide::all();
        return view('back.slide.index', compact('slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slide.create');
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
            'judul_slide' => 'required|min:4',
            'gambar_slide'=> 'mimes:png,jpg,jpeg,gif,bmp,svg,webp'
        ]);

        if (!empty($request->file('gambar_slide'))) {
            $data = $request->all();
            $data['id_slide'] = 'ART-' . Str::random(10);
            $data['gambar_slide']= $request->file('gambar_slide')->store('slide');

            Slide::create($data);
            Alert::success('Saved', 'Data Berhasil Disimpan');
            return redirect()->route('slide.index')->with('success','Data Berhasil Disimpan');
        } else {
            $data = $request->all();
            Slide::create($data);
            Alert::success('Saved', 'Data Berhasil Disimpan');
            return redirect()->route('slide.index')->with('success','Data Berhasil Disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function show($id_slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function edit($id_slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_slide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_slide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_slide)
    {
        $slide=Slide::find($id_slide);
        if (!$slide) {
            return redirect()->back()->with('success','Data Tidak Ada');
        }
        Storage::delete($slide->gambar_slide);
        $slide->delete();
        Alert::warning('Deleted', 'Data Berhasil Dihapus');
        return redirect()->route('slide.index')->with('success','Data Berhasil Dihapus');
    }
}
