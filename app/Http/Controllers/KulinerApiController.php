<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Symfony\Component\HttpFoundation\Response;

class KulinerApiController extends Controller
{
    /**
     * Menampilkan Seluruh List Kuliner */
    public function index()
    {
        $kuliner = Kuliner::simplePaginate(5)->all();
        $response = [
            'message' => 'Berhasil Mendapatkan Semua List Kuliner',
            'data' => $kuliner
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Menapilkan Kuliner Secara Spesifik
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $kuliner = Kuliner::where('slug', $slug)->first();
        $response = [
            'message' => 'Detail Berhasil Ditampilkan',
            'data' => $kuliner
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
