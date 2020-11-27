<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MemoryImageController extends Controller
{
  public function upload(Request $request)
  {
      // 追加
      if ($request->hasFile('img_file'))
      {
          $this->validate($request,[
            'img_file' => [
              'required',
              'file',
              'image',
              'mimes:jpeg,png',
            ]
          ]);
          
          $title = $request->input('title');
          $title_h = $request->input('title_h');
          $year = $request->input('year');
          $author = $request->input('author');
          $author_h = $request->input('author_h');
          $publisher = $request->input('publisher');
          $category = $request->input('category');
       
        
          if ($request->file('img_file')->isValid([])) {
          
            $path = Storage::disk('s3')->putFile('/temporaryimage', $request->file('img_file'), 'public');
            return redirect('/book_add');
            
          }else{
            return redirect('/book_add');
          }
           //インスタンス化
        }
          
   

  }
}