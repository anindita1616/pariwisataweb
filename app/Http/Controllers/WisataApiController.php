<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Symfony\Component\HttpFoundation\Response;

class WisataApiController extends Controller
{
    /**
     * Menampilkan Seluruh List Wisata
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::simplePaginate(5)->all();
        $response = [
            'message' => 'Berhasil Mendapatkan Semua List Wisata',
            'data' => $wisata
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Menapilkan Wisata Secara Spesifik
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $wisata = Wisata::where('slug', $slug)->first();
        $response = [
            'message' => 'Detail Berhasil Ditampilkan',
            'data' => $wisata
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
