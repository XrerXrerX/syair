<?php

namespace App\Http\Controllers;

use App\Models\Syair;
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
            $pasaran = Pasaran::firstWhere('slug', request('nm_psr'));
            $nama = $pasaran->name;
            $title  = $pasaran->slug;
        }
        return view('angkasyair', [
            'title' =>  $title,
            // 'syair' => Syair::all(),
            // 'syairs' => Syair::latest()->get(),
            'syairs' => Syair::where('nm_pasar', $nama)->paginate(6),
            // 'syairs' => Syair::latest()->filter(request(['nm_pasar']))->get(),
            'pasarans' => Pasaran::all(),


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
