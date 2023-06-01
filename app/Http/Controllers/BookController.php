<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

use App\Traits\ApiResponser;

class BookController extends Controller
{
    use ApiResponser;

    public function index(){
        $author = Book::all();
        return $this->successResponse($author);
    }

    public function store(Request $request){
        $rules = [
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required',
            'author_id'=>'required'
        ];
        $this->validate($request,$rules);
       
        $book = Book::create($request->all());
        return $this->successResponse($book,200);
    }

    public function show($book){
        $book = Book::findOrFail($book);
        return $this->successResponse($book);
    }

    public function update(Request $request, $book){
        
        $rules = [
            'title'=>'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required|min:1',
            'author_id'=>'required'
        ];
        $this->validate($request,$rules);
        $book = Book::findOrFail($book);
        $book->fill($request->all());
        if($book->isClean()){
            return $this->errorResponse('At least one value must change',422);
        }
        $book->save();
        return $this->successResponse($book);
    }

    public function destroy($book){
        $book = Book::findOrFail($book);
        $book->delete();
        return $this->successResponse($book);
    }

    
}
