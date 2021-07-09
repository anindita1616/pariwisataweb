<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /* Menampilkan List Event */
    public function index()
    {
        $event = Event::all();
        return view('events.index', compact('event'));
    }

    /* Form Tambah Event */
    public function create()
    {
        return view('events.create');
    }

    /* Simpan Ke Database */
    public function store(Request $request)
    {
        request()->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
        ]);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $image_name = time().'.'.$extention;
            $request->gambar->move(public_path('img/gambarevent'),$image_name);

        }else{
            $image_name = null;
        }

        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('public/thumbnail/events', $file_name);

        Event::create([
            'judul' => request('judul'),
            'lokasi' => request('lokasi'),
            'kategori' => request('kategori'),
            'gambar' => $image_name,
            'slug' => Str::slug($request->judul, '-'),
            'deskripsi' => request('deskripsi'),
        ]);
        return redirect()->route('events.index');
    }

    /* Lihat Detail Event */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('events.show', compact('event'));
    }

    /* Form Edit Event */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /* Update Database Event */
    public function update(Event $event, Request $request)
    {
        request()->validate([
            'judul' => 'required',
            'lokasi' => 'required',
            'kategori' => 'required',
            'gambar' => 'required:mimes:jpg,jpeg,png,gif',
            'deskripsi' => 'required',
        ]);
        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $image_name = time().'.'.$extention;
            $request->gambar->move(public_path('img/gambarevent'),$image_name);

        }else{
            $image_name = null;
        }

        // $file_name = request()->gambar->getClientOriginalName();
        // $gambar = $request->gambar->storeAs('thumbnail/gambarevent', $file_name);
        $event->update([
            'judul' => request('judul'),
            'lokasi' => request('lokasi'),
            'kategori' => request('kategori'),
            'gambar' => $image_name,
            'deskripsi' => request('deskripsi'),
        ]);
        return redirect()->route('events.index');
    }

    /**
     * Hapus dari Database
     *
     * @param  int  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index')->with('status', 'Data Berhasil di hapus!');
    }
}
