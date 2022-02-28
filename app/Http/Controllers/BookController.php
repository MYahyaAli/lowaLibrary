<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request){
        $book = new Book;
        $book->bookname= $request->input('bookname');
        $book->authorname= $request->input('authorname');
        $book->descrip= $request->input('descrip');
        $book->img= $request->input('img');
        if ($request->hasfile('img'))
        {
            $file=$request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/book_/',$filename);
            $book->img=$filename;
        }
        $book->save();
        return redirect()->back()->with('status','Book added Successfully');
    }
}
