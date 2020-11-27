<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book_category extends Model
{
    protected $table = 'book_categories';

    protected $fillable = [
        'category_kanrinum',
        'bc_book_number',
        'bc_category_number',
        'bc_logic_flag'
    ];

    protected $casts = [
      'category_kanrinum' => 'integer',
      'bc_book_number' => 'integer',
      'bc_category_number' => 'integer',
      'bc_logic_flag' => 'boolean'
  ];

  public $timestamps = false;
}
