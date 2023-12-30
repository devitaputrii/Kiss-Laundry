<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\DaftarHarga;
use App\Models\Kontak;
use App\Models\Ulasan;
use App\Models\User;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $uniques = DaftarHarga::distinct()->pluck('kelompok');
        $kontaks = Kontak::get();
        $ulasans = Ulasan::with('user')->get();

        return view('page.ulasan', compact('uniques', 'kontaks', 'ulasans'));
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
        // Validate the form data
        $request->validate([
            'Rating' => 'required|integer|min:1|max:5',
            'JudulUlasan' => 'required|string|max:255',
            'Ulasan' => 'required|string',
            'UserID' => 'required|exists:users,id',
        ]);

        // Create a new Ulasan instance
        $ulasan = new Ulasan();
        $ulasan->rating = $request->Rating;
        $ulasan->judul = $request->JudulUlasan;
        $ulasan->ulasan = $request->Ulasan;
        $ulasan->user_id = $request->UserID;

        // Save the Ulasan
        $ulasan->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Ulasan added successfully');
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
        //
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
        //
    }
}
