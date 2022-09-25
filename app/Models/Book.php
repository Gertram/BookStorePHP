<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $primaryKey = 'book_id';
    public function Authors(){
        return $this->belongsToMany(Author::class,'books_authors','book_id','author_id');
    }
    public function Genres(){
        return $this->belongsToMany(Genre::class,'books_genres','book_id','genre_id');
    }
    public function Tags(){
        return $this->belongsToMany(Tag::class,'books_tags','book_id','tag_id');
    }
    public function Reviews(){
        return $this->hasMany(Review::class,'book_id','review_id');
    }
}
