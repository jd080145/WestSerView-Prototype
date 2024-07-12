<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboard extends Controller
{
    function index(){
        return redirect('index.dashboard');
    }
}
