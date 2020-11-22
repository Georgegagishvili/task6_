<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Genres;
use App\Auth;

class BooksController extends Controller
{
        public function index()
    {
    	$books = Books::get();
    	return view('techsite.blog',['books'=>$books]);
    	
    }
    public function add_book()
    {
    	$books = Books::get();
    	return view('techsite.add_books',['books'=>$books]);
    }
    public function store(Request $request)
    {
    	Books::create([
    		"title"=>$request->input("title"),
    		"author"=>$request->input("author"),
    		"text"=>$request->input("text"),
    		"genre_id"=>$request->input("genre_id"),
            "image"=>$request->input("image"),
            "user_id"=>auth()->id(),
    	]);
        return redirect()->route('indexpage');
    }

        public function show($id)
    {
        $books = Books::where("id",$id)->firstOrFail();
        return view('techsite.single',["book"=>$books]);
    }

    public function edit($id)
    {
        $book = Books::where('id',$id)->firstOrFail();
        return view('techsite.edit',['book'=>$book]);

    }

    public function update(Request $request)
    {
        Books::where("id",$request->input("id"))->update([
            "title"=>$request->input("title"),
            "author"=>$request->input("author"),
            "genre_id"=>$request->input("genre_id"),
            "text"=>$request->input("text"),
            "image"=>$request->input("image")
        ]);
        return redirect()->route('indexpage');
    }

    public function destroy(Request $request)
    {
        Books::where('id',$request->input('id'))->delete();
        return redirect()->route('indexpage');
    }
}
