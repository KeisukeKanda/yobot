@extends('layouts.app_admin')

@section('content')
<div class="row">
    <div class="col-md-12">
    @include('common.errors')
    <form enctype="multipart/form-data"action="{{ url('admin/items/update') }}" method="POST">
        <!-- 画像 -->
        <div class="form-group"> 
            <label for="item_name">画像</label>
            <input type="file" name="item_img" value="{{$item->item_img}}">
        </div>
        <!--/ 画像 -->

        <!-- item_name -->
        <div class="form-group">
           <label for="item_name">推奨項目名</label>
           <input type="text" id="item_name" name="item_name" class="form-control" value="{{$item->item_name}}">
        </div>
        <!--/ item_name -->
        
        <!-- item_content -->
        <div class="form-group">
           <label for="item_content">表示内容</label>
            <textarea id="item_content" name="item_content" class="form-control" value="{{$item->item_content}}"></textarea>
        </div>
        <!--/ item_content -->
    
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">登録</button>
            <a class="btn btn-link pull-right" href="{{ url('/admin/index') }}">
                戻る
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- id値を送信 -->
         <input type="hidden" name="id" value="{{$item->id}}">
         <!--/ id値を送信 -->
         
         <!-- CSRF -->
         {{ csrf_field() }}
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection