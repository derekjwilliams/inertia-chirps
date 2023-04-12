<?php

namespace App\Http\Controllers;

use App\Models\FavoriteLinkGroup;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class FavoriteLinkGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('FavoriteLinkGroups/Index', [
            'favoriteLinkGroups' => FavoriteLinkGroup::with('user:id,name')->latest()->get(),
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
    public function show(FavoriteLinkGroup $favoriteLinkGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FavoriteLinkGroup $favoriteLinkGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FavoriteLinkGroup $favoriteLinkGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FavoriteLinkGroup $favoriteLinkGroup)
    {
        //
    }
}
