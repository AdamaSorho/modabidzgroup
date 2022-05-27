<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    public function index(): Renderable
    {
        return view("residence.welcome");
    }
}
