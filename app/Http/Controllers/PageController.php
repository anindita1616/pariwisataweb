<?php

namespace App\Http\Controllers;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\Wisata;
use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cari(Request $request){
        $search = $request->search;
        $pilihan = $request->pilihan;
        switch ($pilihan) {
            case "Kuliner":
                $kuliners = Kuliner::where('nama','like',"%".$search."%")->paginate(10);
                return view('front.kuliner',compact('kuliners'));
                break;
            case "Event":
                $events = Event::where('judul','like',"%".$search."%")->paginate(10);
                return view('front.event',compact('events'));
                break;
            case "Wisata":
                $wisatas = Wisata::where('nama','like',"%".$search."%")->paginate(10);
                return view('front.wisata',compact('wisatas'));
                break;
            case "Penginapan":
                $penginapans = Penginapan::where('nama','like',"%".$search."%")->paginate(10);
                return view('front.penginapan',compact('penginapans'));
                break;
            default:
                return view('front.homepage')->with('pesan', 'Pilih Kategori');
    }

}}
