<?php

namespace App\Http\Controllers;

use App\Models\Reaction;
use App\Http\Requests\StoreReactionRequest;
use App\Http\Requests\UpdateReactionRequest;
use Illuminate\Support\Facades\DB;

class ReactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Reaction::with( ['reactionType','user'])->get();
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
    public function store(StoreReactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaction $reaction)
    {
        return $reaction->load('user','reactionType');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reaction $reaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReactionRequest $request, Reaction $reaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaction $reaction)
    {
        //
    }
}
