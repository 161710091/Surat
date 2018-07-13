<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use App\surat_masuks;
use App\surat_keluars;
use App\disposisis;
use App\instansis;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sm = surat_masuks::count();
        $sk = surat_keluars::count();
        $dis = disposisis::count();
        $ins = instansis::count();
        $user = User::count();
        return View('home', compact('sm', 'sk', 'dis', 'ins', 'user'));
        if (Laratrust::hasRole('Super Admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('Admin')) return $this->memberDashboard();
    }

    protected function adminDashboard()
    {
        return view('home');
    }

    protected function memberDashboard()
    {
        return view('home');
    }
}
