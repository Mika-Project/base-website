<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainpageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function downloads() {
        $releases = DB::table('releases')->get();
        return view('download', ['releases' => $releases]);
    }

    public function guides() {
        return view('guides');
    }
}
