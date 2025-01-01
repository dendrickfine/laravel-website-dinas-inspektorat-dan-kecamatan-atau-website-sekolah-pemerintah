<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\Kategori;
use App\Models\Materi;
use App\Models\Slide;
use App\Models\Playlist;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){
        $keyword = request()->keyword;
        if ($keyword) {
            $artikel = Artikel::where('is_active', 1)
                ->where(function ($query) use ($keyword) {
                    $query->whereRaw('judul LIKE ?', ['%'.$keyword.'%'])
                          ->orWhereRaw('body LIKE ?', ['%'.$keyword.'%']);
                })
                ->latest()
                ->simplePaginate(8); 
        } else {
            $artikel = Artikel::where('is_active', 1)->latest()->simplePaginate(8);
        }
        
        $kategori = Kategori::orderBy('nama_kategori')->get();
        $subKategori = Kategori::orderBy('nama_kategori')->get();
        $inovasi =Materi::where('is_active', 1)->latest()->get();
        $postinganTerbaru = Artikel::where('id_kategori', 'ART-lo46Q4qpdW')
                            ->where('is_active', 1)
                            ->latest()
                            ->limit(6)
                            ->get();
        $wilayah = Artikel::where('id_kategori', 32)
                            ->where('is_active', 1)
                            ->limit(6)
                            ->get();

        $slide = Slide::where('status', 1)->latest()->get();
        $ketua = Playlist::where('is_active', 1)->latest()->limit(1)->first();
        $iklanA = Iklan::where('status', 1)->latest()->get();
        return view('front.home',[
            'kategori' => $kategori,
            'artikel' => $artikel,
            'ketua' => $ketua,
            'postinganTerbaru' => $postinganTerbaru,
            'slide' => $slide,
            'subKategori' => $subKategori,
            'iklanA' => $iklanA,
            'inovasi' => $inovasi,
            'wilayah' => $wilayah,
        ]);
    }    
    

    public function detail($slug){
        $kategori = Kategori::all();
        $subKategori = Kategori::orderBy('nama_kategori')->get();
        $artikel = Artikel::where('slug', $slug)->first();
        $artikel->increment('views');
        $postinganTerbaru = Artikel::where('is_active', 1)
                            ->latest()
                            ->limit(5)
                            ->get();
        $wilayah = Artikel::where('id_kategori', 32)
                            ->where('is_active', 1)
                            ->limit(6)
                            ->get();
        $inovasi =Materi::where('is_active', 1)->latest()->get();
        return view('front.artikel.detail-artikel', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'postinganTerbaru' => $postinganTerbaru,
            'subKategori' => $subKategori,
            'inovasi' => $inovasi,
            'wilayah' => $wilayah,
        ]);
    }   
    
    public function kategori($slug){
        // Mendapatkan kategori berdasarkan slug
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        
        // Memuat artikel sesuai dengan kategori yang dipilih
        $artikel = Artikel::where('id_kategori', $kategori->id_kategori)
                        ->where('is_active', 1)
                        ->latest()
                        ->simplePaginate(8);
        
        // Memuat daftar kategori untuk sub-menu
        $subKategori = Kategori::orderBy('nama_kategori')->get();
        
        // Memuat postingan terbaru dan info terbaru seperti sebelumnya
        $postinganTerbaru = Artikel::where('id_kategori', 18)
                            ->where('is_active', 1)
                            ->latest()
                            ->limit(6)
                            ->get();
        $wilayah = Artikel::where('id_kategori', 32)
                            ->where('is_active', 1)
                            ->limit(6)
                            ->get();
        $inovasi =Materi::where('is_active', 1)->latest()->get();
        $slide = Slide::where('status', 1)->latest()->get();
        $ketua = Playlist::where('is_active', 1)->latest()->limit(1)->first();
        $iklanA = Iklan::where('status', 1)->latest()->get();
        // Mengembalikan view home dengan data yang diperlukan
        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'ketua' => $ketua,
            'subKategori' => $subKategori, // Menambahkan variabel $subKategori
            'postinganTerbaru' => $postinganTerbaru,
            'slide' => $slide,
            'iklanA' => $iklanA,
            'inovasi' => $inovasi,
            'wilayah'=> $wilayah,
        ]);
    }
    
}
