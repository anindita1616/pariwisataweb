<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /* Menampilkan List Wisata */
    public function index()
    {
        $wisata = Wisata::simplePaginate(5)->all();
        return view('wisatas.index', compact('wisata'));
    }

    /**
     * Form Tambah Wisata */
    public function create()
    {
        return view('wisatas.create');
    }

    /**
     * Simpan Ke Database */
    public function store(Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link_lokasi' => 'required',
            'link_semat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
        ]);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $image_name = time() . '.' . $extention;
            $request->gambar->move(public_path('img/gambarwisata'), $image_name);
        } else {
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail/gambarwisata', $file_name);

        Wisata::create([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link_lokasi' => request('link_lokasi'),
            'link_semat' => request('link_semat'),
            'harga' => request('harga'),
            'gambar' => $image_name,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => request('deskripsi'),
        ]);
        $request->session()->flash('flash.banner', 'Berhasil Menambahkan Tempat Wisata');
        $request->session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('wisatas.index');
    }

    /** Lihat Detail Wisata */
    public function show($slug)
    {
        $wisata = Wisata::where('slug', $slug)->first();
        return view('wisatas.show', compact('wisata'));
    }

    /**
     * Form Edit Wisata */
    public function edit(Wisata $wisata)
    {
        return view('wisatas.edit', compact('wisata'));
    }

    /** Update Database */
    public function update(Wisata $wisata, Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link_lokasi' => 'required',
            'link_semat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
        ]);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $image_name = time() . '.' . $extention;
            $request->gambar->move(public_path('img/gambarwisata'), $image_name);
        } else {
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail/gambarwisata', $file_name);

        $wisata->update([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link_lokasi' => request('link_lokaso'),
            'link_semat' => request('link_semat'),
            'harga' => request('harga'),
            'gambar' => $image_name,
            'deskripsi' => request('deskripsi'),
        ]);
        $request->session()->flash('flash.banner', 'Berhasil Mengupdate Tempat Wisata!');
        $request->session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('wisatas.index');
    }

    /* Hapus dari Database */
    public function destroy(Request $request, Wisata $wisata)
    {
        $wisata->delete();
        $request->session()->flash('flash.banner', 'Berhasil Menghapus Tempat Wisata!');
        $request->session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('wisatas.index')->with('status', 'Data Berhasil di hapus!');
    }
}
