<?php

namespace App\Http\Controllers;

use App\Models\Verify;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function verify_page_function()
    {
        return view('inner.verify');
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
    public function show(Verify $verify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Verify $verify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Verify $verify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Verify $verify)
    {
        //
    }
}
