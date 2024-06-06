<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('dyeing.schedule');
    }
}
