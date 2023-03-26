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

        dd($request);
        $syairs = Syair::where('slug', $id)->get();
        $syair = Syair::where('slug', $id)->first();


        $rules = [
            'nm_pasar' => 'required|max:255',
            'artaImage' => 'image|file|max:5046',
            'arwanaImage' => 'image|file|max:5046',
            'doyanImage' => 'image|file|max:5046',
            'duoImage' => 'image|file|max:5046',
            'jeepImage' => 'image|file|max:5046',
            'neonImage' => 'image|file|max:5046',
            'neroImage' => 'image|file|max:5046',
            'romaImage' => 'image|file|max:5046',
            'tokeImage' => 'image|file|max:5046',
            'tsImage' => 'image|file|max:5046',
            'zaraImage' => 'image|file|max:5046',
            'datepost' => 'required'
        ];



        if ($request->slug != $syair->slug) {
            $rules['slug'] = 'required|unique:syairs';
        }

        $validatedData = $request->validate($rules);


        if ($request->file('artaimage')) {

            if ($request->oldartaimage) {
                Storage::delete($request->oldartaimage);
            }
            $validatedData['artaimage'] = $request->file('artaimage')->store('post-images');
        }

        if ($request->file('arwanaimage')) {

            if ($request->oldarwanaimage) {
                Storage::delete($request->oldarwanaimage);
            }
            $validatedData['arwanaimage'] = $request->file('arwanaimage')->store('post-images');
        }

        if ($request->file('doyanimage')) {

            if ($request->olddoyanimage) {
                Storage::delete($request->olddoyanimage);
            }
            $validatedData['doyanimage'] = $request->file('doyanimage')->store('post-images');
        }

        if ($request->file('duoimage')) {

            if ($request->oldduoimage) {
                Storage::delete($request->oldduoimage);
            }
            $validatedData['duoimage'] = $request->file('duoimage')->store('post-images');
        }

        if ($request->file('jeepimage')) {

            if ($request->oldjeepimage) {
                Storage::delete($request->oldjeepimage);
            }
            $validatedData['jeepimage'] = $request->file('jeepimage')->store('post-images');
        }

        if ($request->file('tokeimage')) {

            if ($request->oldtokeimage) {
                Storage::delete($request->oldtokeimage);
            }
            $validatedData['tokeimage'] = $request->file('tokeimage')->store('post-images');
        }

        if ($request->file('neonimage')) {

            if ($request->oldneonimage) {
                Storage::delete($request->oldneonimage);
            }
            $validatedData['neonimage'] = $request->file('neonimage')->store('post-images');
        }

        if ($request->file('neroimage')) {

            if ($request->oldneroimage) {
                Storage::delete($request->oldneroimage);
            }
            $validatedData['neroimage'] = $request->file('neroimage')->store('post-images');
        }

        if ($request->file('neroimage')) {

            if ($request->oldneroimage) {
                Storage::delete($request->oldneroimage);
            }
            $validatedData['neroimage'] = $request->file('neroimage')->store('post-images');
        }

        if ($request->file('romaimage')) {

            if ($request->oldromaimage) {
                Storage::delete($request->oldromaimage);
            }
            $validatedData['romaimage'] = $request->file('romaimage')->store('post-images');
        }

        if ($request->file('zaraimage')) {

            if ($request->oldzaraimage) {
                Storage::delete($request->oldzaraimage);
            }
            $validatedData['zaraimage'] = $request->file('zaraimage')->store('post-images');
        }

        if ($request->file('tsimage')) {

            if ($request->oldtsimage) {
                Storage::delete($request->oldtsimage);
            }
            $validatedData['tsimage'] = $request->file('tsimage')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Syair::where('slug', $id)
            ->update($validatedData);

        return redirect('/trex1diath/dashboard/posts')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Syair $syair)
    {
        //
    }
}
