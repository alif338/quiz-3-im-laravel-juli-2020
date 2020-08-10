<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index() {

        return view('layouts.master');
    }


    public function create() {
        return view('layouts.new_proyek');
    }

    public function store(Request $request) {


        return redirect('/items')->with('success','Proyek berhasil dibuat!');
    }

    public function show() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function destroy() {

    }
}
