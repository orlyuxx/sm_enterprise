<?php

namespace App\Http\Controllers\Api;

use App\Models\Enterprise;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnterprisesRequest;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Enterprise::all(); 
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
    public function update(EnterprisesRequest $request, string $id)
    {
        $validated = $request->validated();

        $enterprise = Enterprise::findOrFail($id);

        $enterprise->update($validated);

        return $enterprise;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
