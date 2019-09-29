<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Content;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   //入力フォーム
   public function showCreateForm()
   {
       return view('new');
   }

   //確認フォーム
   public function confirm(Request $request)
   {
   		$id = $request->id;
   		$title = $request->title;
   		$content = $request->content;
		return view('new_comfirm', compact('id', 'title', 'content'));  
   }

   //登録フォーム
   public function complete(Request $request)
   {
       // Postモデルのインスタンスを作成する
       //$content = new Content();
       //idがぞんざいする場合は更新、存在し負ければインスタンス

   		$content = Content::firstOrNew(['id' => $request->id]);
   		
       // タイトル
       $content->title = $request->title;
       //コンテンツ
       $content->content = $request->content;
       //登録ユーザーからidを取得
       $content->user_id = Auth::user()->id;
       // インスタンスの状態をデータベースに書き込む
       $content->save();


       //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
       return view('complete');
   }

   //編集
   public function showEditForm(Request $request)
   {
   	   $id = $request->id;
   	   $title = Content::where('id', $id)->value('title');
   	   $content = Content::where('id', $id)->value('content');
   	   //$title = $list->title;
   	   //$content = $list->content;
       return view('edit', compact('id', 'title', 'content'));
   }

/*
   public function create(Request $request)
   {
       // Postモデルのインスタンスを作成する
       $content = new Content();
       // タイトル
       $content->title = $request->title;
       //コンテンツ
       $content->content = $request->content;
       //登録ユーザーからidを取得
       $content->user_id = Auth::user()->id;
       // インスタンスの状態をデータベースに書き込む
       $content->save();


       //「投稿する」をクリックしたら投稿情報表示ページへリダイレクト        
       return redirect()->route('posts.detail', [
           'id' => $content->id,
       ]);
   }

   	public function detail(Request $request)
   {
   	print_r($request->title);
   	exit;
       return view('new_comfirm', [
           'title' => $request->title,
           'content' => $request->content,
           'user_id' => $request->user_id,
       ]);        
   }
*/




}
