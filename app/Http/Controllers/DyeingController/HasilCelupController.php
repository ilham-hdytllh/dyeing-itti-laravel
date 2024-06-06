<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilCelupController extends Controller
{
    public function index()
    {
        return view('dyeing.hasil_celup');
    }
}
