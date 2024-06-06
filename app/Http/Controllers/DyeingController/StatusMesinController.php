<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusMesinController extends Controller
{
    public function index()
    {
        return view('dyeing.status_mesin');
    }
}
