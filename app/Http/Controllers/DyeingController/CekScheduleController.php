<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CekScheduleController extends Controller
{
    public function index()
    {
        return view('dyeing.cek_schedule');
    }
}
