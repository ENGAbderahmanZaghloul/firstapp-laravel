<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // ✅ الحل هنا
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function actionsContainer(){
    return view('home');

    }

}
