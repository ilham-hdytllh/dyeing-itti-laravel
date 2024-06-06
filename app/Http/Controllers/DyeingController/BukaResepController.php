<?php

namespace App\Http\Controllers\DyeingController;

use App\Http\Controllers\Controller;
use App\Models\DyeingModel\BukaResepModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class BukaResepController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari buka resep yang cek_resep = null dengan model
        $dataBukaResep = BukaResepModel::on('db_dying')->whereNull('cek_resep')->get();
        return view('dyeing.buka_resep', ['dataBukaResep' => $dataBukaResep]);
    }
}
