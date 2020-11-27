<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lend_book extends Model
{
    protected $table = 'lend_books';

    protected $fillable = [
        'lend_number',
        'l_book_number',
        'l_account_number',
        'return_day',
        'return_flag'
    ];

    protected $casts = [
      'lend_number' => 'integer',
      'l_book_number' => 'integer',
      'l_account_number' => 'integer',
      'return_flag' => 'boolean'
  ];

  public $timestamps = false;
}

