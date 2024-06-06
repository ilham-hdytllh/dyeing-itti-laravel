<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringTempelanController extends Controller
{
    public function index()
    {
        return view('dyeing.monitoring_tempelan');
    }
}
