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
        
    }

    public function show($book){
        
    }

    public function update(Request $request, $book){
       
    }

    public function destroy($book){
        
    }

    
}
