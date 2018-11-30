<?php

namespace App\Http\Controllers\Webapp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('webapp.index');
    }
}
