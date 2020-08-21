<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Momo;

class MomoController extends Controller
{
    public function index() {
      // $momos = Momo::all();// select everything from database
      // $momos = Momo::orderBy('name')->get();
      // $momos = Momo::orderBy('name', 'desc')->get();
       //  $momos = Momo::where('column', 'field')->get();
        $momos = Momo::latest()->get();
        return view('momos.index', ['momos' => $momos,]);
    }

    public function show($id) {
        $momo = Momo::findOrFail($id);
        return view('momos.show', ['momo' => $momo]);
    }

    public function create() {
        return view('momos.create');
    }

    public function store() {
        
        $momo = new Momo(); //instance of Momo model
        $momo->name = request('name');
        $momo->type = request('type');
        $momo->plates = request('plates');
        $momo->cookingStyle = request('cookingStyle');
        $momo->colddrinks = request('colddrinks');

        $momo->save();
        return redirect('/')->with('msg',"Thanks for your order,$momo->name."); //session data
    }

    public function destroy($id) {
        $momo = Momo::findOrFail($id);
        $momo->delete();

        return redirect('/momos');
    }
}
