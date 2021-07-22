<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        return view('portal.index');
    }

    public function musica(){
        return view('portal.musica');
    }
}
