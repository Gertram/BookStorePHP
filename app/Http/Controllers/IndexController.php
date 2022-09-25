<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookList;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    public function index(){

        $lists = BookList::all()->all();//await req.models.lists().Lists().getAll();
        $genres_list = Genre::all()->sortByDesc(['views'])->take(4)->all(); //await req.models.genres().getMostNumerous(4);
        $picked = Book::all()->sortByDesc('views')->take(4)->all();//await req.models.books().getMostPopular(4);
        $mostPopular = Author::all()->sortByDesc(['views'])->take(4)->all();
        $best = Book::all()->where('is_featured_bestseller',1)->random();
        $new_list = Book::all()->sortByDesc(['added'])->take(4)->all();
        $bestsellers = Book::all()->sortByDesc(['views'])->take(4)->all();

        return view('index/index',[
            'nav'=> 'index',
            'bestsellers'=>$bestsellers,
            'lists'=> $lists,
            'genres'=> $genres_list,
            'picked'=> $picked,
            'most_popular'=> $mostPopular,
            'best'=> $best,
            'news'=> $new_list
        ]);
    }
}
