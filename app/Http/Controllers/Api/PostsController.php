<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Posts;
use Dotenv\Validator;
use Illuminate\Http\Request;


class PostsController extends Controller
{

    public function index()
    {
        return Posts::all();
    }


    public function store(PostRequest $request){

        Posts::create($request->all());

    }


    public function show($id)
    {
        return Posts::find($id);
    }




    public function destroy($id)
    {
        Posts::destroy($id);
    }
}
