<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\Sts;
use App\Models\Pasaran;
use App\Http\Requests\StorePasaranRequest;
use App\Http\Requests\UpdatePasaranRequest;

class PasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        if (request('nm_psr')) {

            if (request('nm_psr') == '1') {
                $img = '1';
                $title = 'ARTA4D';
            } elseif (request('nm_psr') == '2') {
                $img = '2';
                $title = 'ARWANATOTO';
            } elseif (request('nm_psr') == '3') {
                $img = '3';
                $title = 'DOYANTOTO';
            } elseif (request('nm_psr') == '4') {
                $img = '4';
                $title = 'DUO4D';
            } elseif (request('nm_psr') == '5') {
                $img = '5';
                $title = 'JEEPTOTO';
            } elseif (request('nm_psr') == '6') {
                $img = '6';
                $title = 'NEON4D';
            } elseif (request('nm_psr') == '7') {
                $img = '7';
                $title = 'NERO4D';
            } elseif (request('nm_psr') == '8') {
                $img = '8';
                $title = 'ROMA4D';
            } elseif (request('nm_psr') == '9') {
                $img = '9';
                $title = 'TOKE4D';
            } elseif (request('nm_psr') == '10') {
                $img = '10';
                $title = 'ZARA4D';
            } else {
                $img = '11';
                $title = 'TSTOTO';
            }
        }


        return view('angkasyair', [

            'title' => $title,
            // 'image' => $image,
            // 'syair' => Syair::all(),
            // 'syairs' => Syair::latest()->get(),
            'syairs' => Syair::latest()->paginate(6)->withQueryString(),
            'img' => $img,
            // 'syairs' => Syair::latest()->filter(request(['nm_pasar']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePasaranRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasaran $pasaran)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasaran $pasaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePasaranRequest $request, Pasaran $pasaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasaran $pasaran)
    {
        //
    }
}
