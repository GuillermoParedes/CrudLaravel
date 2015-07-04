<?php

namespace Crud\Http\Controllers;

use Illuminate\Http\Request;

use Crud\Http\Requests;
use Crud\Http\Controllers\Controller;

class PagesController extends Controller
{


    public function home()
    {
        return view('pages.home');
//        return 'holas';
    }
}
