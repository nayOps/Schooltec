<?php

namespace App\Http\Controllers;

use App\Models\Jobe;
use Illuminate\Http\Request;

class JobeController extends Controller
{
    public function index()
    {
        $jobs =  Jobe::online()->latest()->get();

        return view('jobs.index', [

            'jobs' => $jobs
            
            ]);
    }
}
