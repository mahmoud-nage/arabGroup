<?php

namespace App\Http\Controllers\Front;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function books($flag = 'all'){
        if($flag == 'views'){
            $records = Book::orderBy('views', 'desc')->get(); // take(num) return num of books
        }else if($flag == 'favourites'){
            $records = Book::orderBy('favourite', 'desc')->get();
        }else if($flag == 'latest'){
            $records = Book::orderBy('publish_date', 'desc')->get();
        }else{
            $records = Book::all();
        }
        dd($records);
    }

    public function book($id){
        $record = Book::find($id);
        return view('front.book', compact('record'));
    }

}
