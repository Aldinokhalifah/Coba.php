<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;

class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
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
    public function show(Sepatu $sepatu)
    {
        return view('shoe.show', compact('sepatu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sepatu $sepatu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sepatu $sepatu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sepatu $sepatu)
    {
        //
    }
}
