@extends('layouts.app')
@section('content')

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
           

       </div>

@endsection