<?php

namespace App\Http\Controllers\Cooperative;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/cooperative/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('cooperative.auth:cooperative');
    }

    /**
     * Show the Cooperative dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('cooperative.home');
    }

}