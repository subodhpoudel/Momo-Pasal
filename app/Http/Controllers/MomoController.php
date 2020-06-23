<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MomoController extends Controller
{
    public function index() {
        return view('momos');
    }

    public function show($id) {
        return view('details',['id' => $id]);
    }
}
