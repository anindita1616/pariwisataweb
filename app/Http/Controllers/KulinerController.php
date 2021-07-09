<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KulinerController extends Controller
{
    /* Menampilkan List Tempat Kuliner */
    public function index()
    {
        $kuliner = Kuliner::all();
        return view('kuliners.index', compact('kuliner'));
    }

    /* Form Tambah Kuliner */
    public function create()
    {
        return view('kuliners.create');
    }

    /* Simpan Ke Database */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'link_order' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
        ]);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $image_name = time().'.'.$extention;
            $request->gambar->move(public_path('img/gambarkuliner'),$image_name);

        }else{
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail/gambarkuliner', $file_name);
        Kuliner::create([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link' => request('link'),
            'link_order' => request('link_order'),
            'gambar' => $image_name,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => request('deskripsi'),
        ]);
        return redirect()->route('kuliners.index');
    }

    /* Lihat Detail Kuliner */
    public function show($slug)
    {
        $kuliner = Kuliner::where('slug', $slug)->first();
        return view('kuliners.show', compact('kuliner'));
    }

    /**
     * Form Edit
     *
     * @param  int  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuliner $kuliner)
    {
        return view('kuliners.edit', compact('kuliner'));
    }

    /**
     * Update Database
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Kuliner $kuliner, Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'link_order' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
        ]);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $image_name = time().'.'.$extention;
            $request->gambar->move(public_path('img/gambarkuliner'),$image_name);

        }else{
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail', $file_name);

        $kuliner->update([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link' => request('link'),
            'link_order' => request('link_order'),
            'gambar' => $image_name,
            'deskripsi' => request('deskripsi'),
        ]);
        return redirect()->route('kuliners.index');
    }

    /**
     * Hapus dari Database
     *
     * @param  int  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuliner $kuliner)
    {
        $kuliner->delete();
        return redirect()->route('kuliners.index')->with('status', 'Data Berhasil di hapus!');
    }
}
