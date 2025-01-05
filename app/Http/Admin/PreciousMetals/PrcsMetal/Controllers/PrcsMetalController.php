<?php

declare(strict_types=1);

namespace App\Http\Admin\PreciousMetals\PrcsMetal\Controllers;

use App\Http\Shared\Controller;
use Domain\PreciousMetals\PrcsMetal\Models\PrcsMetal;
use Illuminate\Http\Request;

class PrcsMetalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PrcsMetal::all();
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
    public function show(PrcsMetal $prcsMetal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrcsMetal $prcsMetal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrcsMetal $prcsMetal)
    {
        //
    }
}
