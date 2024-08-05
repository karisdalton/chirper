<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }
}
