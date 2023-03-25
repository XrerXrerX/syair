<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasaran;
use App\Models\Syair;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            // 'posts' => Syair::where('user_id', auth()->user()->id)->get()
            'posts' => Syair::latest()->paginate(18)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'pasarans' => Pasaran::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nm_pasar' => 'required|max:255',
            'slug' => 'required|unique:syairs',
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
        ]);

        if ($request->file('artaimage')) {
            $validatedData['artaimage'] = $request->file('artaimage')->store('post-images');
        }
        if ($request->file('arwanaimage')) {
            $validatedData['arwanaimage'] = $request->file('arwanaimage')->store('post-images');
        }
        if ($request->file('doyanimage')) {
            $validatedData['doyanimage'] = $request->file('doyanimage')->store('post-images');
        }
        if ($request->file('duoimage')) {
            $validatedData['duoimage'] = $request->file('duoimage')->store('post-images');
        }

        if ($request->file('jeepimage')) {
            $validatedData['jeepimage'] = $request->file('jeepimage')->store('post-images');
        }

        if ($request->file('neonimage')) {
            $validatedData['neonimage'] = $request->file('neonimage')->store('post-images');
        }

        if ($request->file('neroimage')) {
            $validatedData['neroimage'] = $request->file('neroimage')->store('post-images');
        }

        if ($request->file('romaimage')) {
            $validatedData['romaimage'] = $request->file('romaimage')->store('post-images');
        }

        if ($request->file('tokeimage')) {
            $validatedData['tokeimage'] = $request->file('tokeimage')->store('post-images');
        }
        if ($request->file('tsimage')) {
            $validatedData['tsimage'] = $request->file('tsimage')->store('post-images');
        }
        if ($request->file('zaraimage')) {
            $validatedData['zaraimage'] = $request->file('zaraimage')->store('post-images');
        }


        $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200, '...');

        Syair::create($validatedData);

        return redirect('/trex1diath/dashboard/posts')->with('success', 'new post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        return view('dashboard.posts.edit', [
            'post' => $id,
            'pasarans' => Pasaran::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($id->image) {
            Storage::delete($id->id);
        }
        Post::destroy($id->id);

        return redirect('/dashboard/posts')->with('success', ' post has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Syair::class, 'slug', $request->datepost);
        return response()->json(['slug' => $slug]);
    }
}
