<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasalahCelupanController extends Controller
{
    public function index()
    {
        return view('dyeing.masalah_celupan');
    }
}
