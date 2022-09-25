<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = 'tag_id';

    public function Books(){
        return $this->belongsToMany(Book::class,'books_tags','book_id','tag_id');
    }
}
