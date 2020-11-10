<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blist extends Model
{
    protected $table = 'booklist';

    protected $guarded = array('account_number');
  
    public $timestamps = false;
  
    public function getData()
    {
      $data = DB::table($this->table)->get();
  
      return $data;
}
}