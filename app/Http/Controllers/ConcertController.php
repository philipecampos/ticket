<?php

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function show($id)
    {
        $concert = Concert::find($id);

        return view('concerts.show', [
            'concert' => $concert
        ]);
    }
}
