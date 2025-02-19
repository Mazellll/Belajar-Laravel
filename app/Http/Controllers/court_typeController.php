<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\court_type;

class court_typeController extends Controller
{
    public function index(){
        $court_type = court_type::all();
        // dd($types);
        // return $types;
        return view('mcourt_type', compact('court_type'));
    }

    public function store(){

    }
}
