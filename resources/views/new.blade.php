@extends('layouts.app')
@section('content')
<form method="post" action="{{ url('/admin/content/confirm') }}" enctype="multipart/form-data">
 @csrf
       <div class="form">
           <div class="form-title">
             <label for="title">タイトル</label> 
             <input class="" name="title" value="{{ old('title') }}">
           </div>
   
           <div class="form-content">
             <label for="content" class="form-content">内容</label> 
             <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>        
           </div>
           
           <div class="form-submit">
             <button type="submit">確認</button>
           </div>
       </div>
</form>
@endsection