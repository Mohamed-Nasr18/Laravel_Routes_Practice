<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //  
    //Passing Data to Views
    public function show($id){
        return view('posts.show', ['id' => $id]);
    }

}
