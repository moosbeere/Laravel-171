<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $articles = json_decode(file_get_contents(public_path().'/articles.json'));
        // var_dump($articles);
        return view('main.main', ['articles'=>$articles]);
    }

    function show($img){
        return view('main.galery', ['img'=>$img]);
    }
}
