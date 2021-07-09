<?php

namespace App\Http\Controllers;

use App\Models\Penginapan;
use Symfony\Component\HttpFoundation\Response;

class PenginapanApiController extends Controller
{
    /**
     * Menampilkan Seluruh List Penginapan
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penginapan = Penginapan::simplePaginate(5)->all();
        $response = [
            'message' => 'Berhasil Mendapatkan Semua List Penginapan',
            'data' => $penginapan
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Menapilkan Penginapan Secara Spesifik
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $penginapan = Penginapan::where('slug', $slug)->first();
        $response = [
            'message' => 'Detail Berhasil Ditampilkan',
            'data' => $penginapan
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
