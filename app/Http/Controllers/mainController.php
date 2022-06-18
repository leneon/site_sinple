<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //

    public function index(){
        return view('clients.clients');
    }

    public function apropos(){
        return view('pages.apropos');
    }

    public function contact(){
        return view('pages.contact');
    }



}
