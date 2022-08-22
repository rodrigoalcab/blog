<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function create() 
    {
        return view('posts.create');
    }


    public function store(Request $request) 
    {
        //dd($request->all());

       /*  if($request->has('title')) {
            dd($request->title);
        } 

        if($request->hasAny(['title', 'content', 'slug'])) {
            dd($request->title);
            }
           
        
        
        dd($request->only(['title', 'slug']));

        $request->query('search', 'este valor será retornado caso não tenhamos o parâmetro s\
        earch na query string');

      
      dd($request->except(['title']));
      */

      //return response('Retorno do tipo json', 200)->header('Content-Type', 'application/json');

      //return redirect()->route('home');
      //return back();
      return back()->withInput();
    }

}
