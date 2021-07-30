<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EventApiController extends Controller
{
    /**
     * Menampilkan Seluruh List Event */
    public function index()
    {
        $event = Event::simplePaginate(5)->all();
        $response = [
            'message' => 'Berhasil Mendapatkan Semua List Event',
            'data' => $event
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Menapilkan Event Secara Spesifik */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $response = [
            'message' => 'Detail Berhasil Ditampilkan',
            'data' => $event
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
