@extends('layouts.app')
@section('content')
<div>
  @if ($id)
  この内容で更新します
  @else
	この内容で投稿します
  @endif
</div>
<form method="post" action="{{ url('/admin/content/complete') }}" enctype="multipart/form-data">
 @csrf
       <div class="form">
           <div class="form-title">
             <label for="title">タイトル</label> 
             <input type="hidden" name="id" value="{{ $id }}">
             <input class="" name="title" value="{{ $title }}" readonly="readonly">
           </div>
   
           <div class="form-content">
             <label for="content" class="form-content">内容</label> 
             <textarea class="" name="content" cols="50" rows="10" readonly="readonly">{{ $content }}</textarea>        
           </div>
           
           <div class="form-submit">
             <button type="submit">投稿</button>
           </div>
       </div>
</form>
@endsection