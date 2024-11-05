<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Batik;

class PageController extends Controller
{
    public function indexHome(){
        $batiks = Batik::orderBy('created_at', 'desc')->take(6)->get();
        return view('Home.index', compact('batiks'));
    }

    public function indexJenis(){
        $batiks = Batik::all();
        return view('Jenis.index', compact('batiks'));
    }
    
    public function indexTentang(){
        return view('Tentang.index');
    }
}