<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        echo "sexo";
    }
    public function show($id){
        echo $id;
    }
    public function create(){
        return view('create_user');
    }
    public function store(Request $request)
    {
        var_dump($request['psw']);

    }
}