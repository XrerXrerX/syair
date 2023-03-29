<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\Pasaran;
use App\Models\Syair;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.admin.index', [
            'Posts' => Syair::all(),
            'title' => Title::first()
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Syair $syair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Syair $syair)
    {
        $syair = Title::where('id', '1')->first();


        return view('dashboard.admin.edit', [
            'post' => $syair,
            'pasarans' => Pasaran::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Syair $syair)
    {

        $rules = [
            'title' => 'required|min:35',
            'body' => 'required|min:35',
        ];

        $validatedData = $request->validate($rules);


        Title::where('id', '1')
            ->update($validatedData);

        return redirect('/trex1diath/dashboard/admin')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syair $syair)
    {
        //
    }
}
