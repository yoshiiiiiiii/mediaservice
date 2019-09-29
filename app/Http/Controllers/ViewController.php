<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ViewController extends Controller
{
       //編集
   public function showForm(Request $request)
   {
   	   $id = $request->id;
   	   $title = Content::where('id', $id)->value('title');
   	   $content = Content::where('id', $id)->value('content');
   	   //$title = $list->title;
   	   //$content = $list->content;
       return view('view', compact('id', 'title', 'content'));
   }
}
