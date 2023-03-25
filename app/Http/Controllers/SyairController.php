<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\Pasaran;
use Illuminate\Http\Request;


use App\Http\Requests\StoreSyairRequest;
use App\Http\Requests\UpdateSyairRequest;
use Termwind\Components\Dd;

class SyairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSyairRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Syair $syair)
    {
        $dayName = \Carbon\Carbon::parse($syair->datepost)->isoFormat('dddd');
        $dateN = \Carbon\Carbon::parse($syair->datepost)->format('d');

        $month = \Carbon\Carbon::parse($syair->datepost)->format('F');
        $year = \Carbon\Carbon::parse($syair->datepost)->isoFormat('Y');


        return view('post', [

            'post' => $syair,
            'dayName' => $dayName,
            'month' => $month,
            'dateN' => $dateN,
            'year' => $year,
            'pasarans' => Pasaran::all(),


        ]);


        // return view('angkasyair', [
        //     'syair' => Syair::all(),
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Syair $syair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSyairRequest $request, Syair $syair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syair $syair)
    {
        //
    }
}
