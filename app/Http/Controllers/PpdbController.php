<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PpdbController extends Controller
{
    public function index()
    {
         return view('index');
    }
}
