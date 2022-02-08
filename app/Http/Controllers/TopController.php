<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller {

    public function showTop() {
        return view('top');
    }

    public function form() {
        return view('form');
    }
}