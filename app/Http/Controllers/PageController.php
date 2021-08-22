<?php

namespace App\Http\Controllers;
use App\Product;
use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){
        return view ('home');
    }

    public function products (){
        
              
        $comics = config('comics.data');
        return view('products.index', compact('comics'));
        
    }

    public function show ($id){
        $comics = config('comics.data');
       

        if(is_numeric($id) &&  $id < count($comics) && $id >= 0){
            $comic = $comics[$id];
            return view('products.show', compact('comic'));
        }else{
            abort(404);
        }
    }

    public function info (){
        return view('info');
    }
}
