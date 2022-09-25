<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookList extends Model
{
    use HasFactory;
    protected $table = "lists";
    protected $primaryKey = "list_id";
    public function Books(){
        return $this->belongsToMany(Book::class,'lists_books','list_id','book_id');
    }
}
