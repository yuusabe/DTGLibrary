<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'book_number',
        'title',
        'title_furigana',
        'cover_pic',
        'publisher',
        'Author',
        'Author_furigana',
        'year_of_issue',
        'b_logic_flag'
    ];

    protected $casts = [
        'book_number' => 'integer',
        'b_logic_flag' => 'boolean'
    ];

  public $timestamps = false;
}