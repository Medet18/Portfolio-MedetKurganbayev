<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use App\Models\Client1;

class Client1Controller extends Controller
{
    //2
    public function index(){
        $clients  = CLient1::all();

        return view ('client.index')->with(['clients' => $clients]);
    }
}
