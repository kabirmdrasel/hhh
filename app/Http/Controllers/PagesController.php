<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home(){
        return 'Hello World';
    }

    public function about(){
        return 'Hello World';
    }
}
