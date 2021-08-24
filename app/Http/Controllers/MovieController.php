<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Movie;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Product::all();             
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //ddd($request->all());
        
       /*  $validate = $request->validate([
            'name' => 'required | min:5 | max:100',
            'image' => 'nullable | image | max: 2500',
            'description' => 'required',
            'price' => 'required | min:5 | max:150',
            
            
        ]);
        $request = Product::create($validate);
        

        return redirect()->route('movies.index'); */

        $movie = new Product();
        $movie->name = $request['name'];
        $movie->description = $request['description'];
        $movie->price = $request['price'];
        $movie->image = $request['image'];
        $movie->save();

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = Product::all();
        if(is_numeric($id) &&  $id < count($movies) && $id >= 0){
            $movie = $movies[$id];
            return view('movies.show', compact('movie'));
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $movie)
    {
        //ddd($movie);
        
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $movie)
    {
        //dd($request->all());
        //dd($movie);
        /* $validate = $request->validate([
            'name' => 'required | min:5 | max:100',
            'image' => 'nullable | image | max: 2500',
            'description' => 'required',
            'price' => 'required | min:5 | max:150',
            'category_id' => 'nullable | exists:categories,id',
            'tags' => 'nullable | exists:tags,id'
        ]);
        $movie= Product::create($validate); */
        $data = $request->all();
        $movie->update($data);
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index');
    }
}
