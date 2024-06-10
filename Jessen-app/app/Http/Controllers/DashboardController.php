<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $prodi = DB::select("SELECT prodis.nama ,COUNT(*) AS jumlah FROM mahasiswas 
        JOIN prodis on prodis.id = mahasiswas.prodi_id GROUP BY prodis.nama");
        
        return view('dashboard') ->with('mahasiswaprodi', $prodi);
    }
}
