<?php

namespace App\Http\Controllers;

use App\Models\Reception;
use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $receptions = Reception::all();

        return view('admin.pages.reception.index', compact('receptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.reception.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rw' => 'required|numeric',
            'priode' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        Reception::create($request->all());

        return redirect()->route('admin.reception.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reception $reception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reception $reception)
    {
        return view('admin.pages.reception.edit', compact('reception'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reception $reception)
    {
        $request->validate([
            'rw' => 'required|numeric',
            'priode' => 'required|date',
            'amount' => 'required|numeric',
        ]);

        $reception->update($request->all());

        return redirect()->route('admin.reception.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();

        return redirect()->route('admin.reception.index');
    }
}