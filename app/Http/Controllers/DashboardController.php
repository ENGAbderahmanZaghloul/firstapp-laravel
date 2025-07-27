<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // ✅ الحل هنا
use Illuminate\Routing\Controller;


class DashboardController extends Controller
{
    public function ContainerAction ()
    {
        $username = $this -> variableAction();
        $users = $this -> secondAction();

        return view('dashboard' , compact('username' , 'users'));
    }
        public function variableAction()
    {
        $username = 'Abdu';
        return $username;
    }

    public function secondAction()
    {
        $users = ['abdu', 'ahmed', 'taha'];
        return $users;
    }
}
