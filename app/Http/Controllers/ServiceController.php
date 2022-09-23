<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
        return view('home', [
            "tittle" => "All service",
            "active" => 'home',
            "service" => Service::all()
        ]);
    }
}
