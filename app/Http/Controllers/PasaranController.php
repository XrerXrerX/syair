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
            $pasaran = Pasaran::firstWhere('id', request('nm_psr'));
            $id = $pasaran->id;
            $title  = $pasaran->slug;
            // if ($pasaran == 'cambodia') {
            //     $id_pasaran = 1;
            // } else if ($pasaran == 'sydney') {
            //     $id_pasaran = 2;
            // } else if ($pasaran == 'china') {
            //     $id_pasaran = 3;
            // } else if ($pasaran == 'totomacau') {
            //     $id_pasaran = 4;
            // } else if ($pasaran == 'singapore') {
            //     $id_pasaran = 5;
            // } else if ($pasaran == 'pcso') {
            //     $id_pasaran = 6;
            // } else if ($pasaran == 'taiwan') {
            //     $id_pasaran = 7;
            // } else {
            //     // nilai default jika tidak ada nilai yang cocok
            //     $id_pasaran = 8;
            // }
            // if ($id_pasaran != 0) {
            //     $image = Syair::table('image')->where('id_pasaran', $id_pasaran)->first();
            // } else {
            //     $image = null;
            // }
        }


        return view('angkasyair', [

            'title' =>  $title,
            // 'image' => $image,
            // 'syair' => Syair::all(),
            // 'syairs' => Syair::latest()->get(),
            'syairs' => Syair::where('pasaran_id', $id)->paginate(6),
            // 'syairs' => Syair::latest()->filter(request(['nm_pasar']))->get(),
            'pasarans' => Pasaran::all(),

            // Dd($id)
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
