<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenginapanController extends Controller
{
    /** Menampilkan List Wisata */
    public function index()
    {
        $penginapan = Penginapan::all();
        return view('penginapans.index', compact('penginapan'));
    }

    /* Form Tambah Wisata */
    public function create()
    {
        return view('penginapans.create');
    }

    /* Simpan Ke Database */
    public function store(Request $request, Penginapan $penginapan)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
            'link_order' => 'required',
        ]);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $image_name = time() . '.' . $extention;
            $request->gambar->move(public_path('img/gambarpenginapan'), $image_name);
        } else {
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail/gambarpenginapan', $file_name);
        Penginapan::create([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link' => request('link'),
            'link_order' => request('link_order'),
            'gambar' => $image_name,
            'slug' => Str::slug($request->nama, '-'),
            'deskripsi' => request('deskripsi'),
        ]);
        $request->session()->flash('flash.banner', 'Berhasil Menambahkan Tempat Penginapan!');
        $request->session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('penginapans.index');
    }

    /**Lihat Detail Penginapan */
    public function show($slug)
    {
        $penginapan = Penginapan::where('slug', $slug)->first();
        return view('penginapans.show', compact('penginapan'));
    }

    /**
     * Form Edit */
    public function edit(Penginapan $penginapan)
    {
        return view('penginapans.edit', compact('penginapan'));
    }

    /* Update Database */
    public function update(Penginapan $penginapan, Request $request)
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'link_lokasi' => 'required',
            'link_semat' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
            'link_order' => 'required',
        ]);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $image_name = time() . '.' . $extention;
            $request->gambar->move(public_path('img/gambarpenginapan'), $image_name);
        } else {
            $image_name = null;
        }
        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail', $file_name);

        $penginapan->update([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'link_lokasi' => request('link_lokasi'),
            'link_semat' => request('link_semat'),
            'link_order' => request('link_order'),
            'gambar' => $image_name,
            'deskripsi' => request('deskripsi'),
        ]);
        $request->session()->flash('flash.banner', 'Berhasil Menguodate Tempat Penginapan!');
        $request->session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('penginapans.index');
    }

    /* Hapus dari Database */
    public function destroy(Request $request, Penginapan $penginapan)
    {
        $penginapan->delete();
        $request->session()->flash('flash.banner', 'Berhasil Menghapus Tempat Penginapan!');
        $request->session()->flash('flash.bannerStyle', 'danger');
        return redirect()->route('penginapans.index')->with('status', 'Data Berhasil di hapus!');
    }
}
