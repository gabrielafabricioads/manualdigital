<?php

namespace App\Http\Controllers;

use App\Models\Manual;

class ManualController extends Controller
{
    /**
     * Página inicial: lista todos os manuais.
     * Os que já estão prontos aparecem primeiro.
     */
    public function index()
    {
        $manuals = Manual::orderByDesc('available')->orderBy('id')->get();

        return view('manuals.index', compact('manuals'));
    }
}
