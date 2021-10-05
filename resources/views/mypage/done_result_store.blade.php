<link href="{{ asset('css/done.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの表示に使用-->
@include('common.errors')
<!-- バリデーションエラーの表示に使用-->

<div class="wrap">
    <div class="top">
        <div class="item_img">
            <img src="/upload/{{$item->item_img}}" class="img">
        </div>
    </div>

    <h2>{{ $item->item_name }}の結果</h2>

    <div class="main">
        <form enctype="multipart/form-data" action="{{ url('/mypage/done/'.$item->id.'/store') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="done_date">
                <label>実施年月日</label>
                <div class="date_frame"><input class="" type="date" name="done_date" value="<?php echo date('Y-m-d'); ?>"></div>
                <!--ここにカレンダー-->
            </div>
            <div class="result_record">
                <label>結果の記録</label>
                <div class="file_upload">
                    <div class="file_message">結果の写メなどのファイルを保存できます</div>
                    <div class="result_file"><input type="file" name="result_file"></div>
                </div>
            </div>
            <div class="resule_comment">
                <label>自己記録（コメント・メモ）</label>
                <div class="comment_frame"><textarea type="text" name="result_comment" class="comment_area" placeholder="例）異常なかった" style="overflow:auto;"></textarea></div>
                <!--<div><input type="text" name="result_comment" class="comment_area"></div>-->
            </div>

            <div>
                <input type="hidden" name="{{$item->id}}" value="">
            </div>


            <div class="result_button">
                <div>
                    <a class="btn btn-primary" href="{{ url('mypage/recommendation_detail/'.$item->id) }}">戻る</a>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
