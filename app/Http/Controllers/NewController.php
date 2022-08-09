<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class NewController extends Controller
{
   

    public function index(){
        return view('form');
    }

    public function store(Request $request){
        Clients::create($request->all());
         return response()->json(['success'=>'sucess']);
          }

}