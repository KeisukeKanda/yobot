<link href="{{ asset('css/done.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
<!-- バリデーションエラーの表示に使用-->
@include('common.errors')
<!-- バリデーションエラーの表示に使用-->
<div id="firstview">
    <h1>養生を身近に</h1>
</div>

<div class="wrap">
    <h2>{{ $item->item_name }}の結果</h2>

    <div class="main">
        <form enctype="multipart/form-data" action="{{ url('/mypage/results/'.$results->id.'/update') }}" method="POST" class="form-horizontal">

            <div class="done_date">
                <label>実施年月日</label>
                <!--ここにカレンダー-->
                <div class="date_frame"><input id="done_date" type="date" name="done_date" value="{{$results->done_date}}"></div>
            </div>
            <div class="result_record">
                <label>結果の記録</label>
                <div class="file_upload">
                    <div class="file_message">結果の写メなどのファイルを保存できます</div>
                    <div class="result_file"><input type="file" name="result_file" value="{{$results->result_file}}"></div>
                </div>
                <div class="file_show">
                    <!--ここに画像が表示される-->
                </div>
            </div>
            <div class="resule_comment">
                <label>自己記録（コメント・メモ）</label>
                <div class="comment_frame"><textarea type="text" name="result_comment" placeholder="例）異常なかった" value="{{$results->result_comment}}" class="comment_area" style="overflow:auto;"></textarea></div>
            </div>

            <div>
                <input type="hidden" name="id" value="{{$results->id}}">
            </div>

            <div>
                <input type="hidden" name="item_id" value="{{$results->item_id}}">
            </div>

            <div class="result_button">
                <div>
                    <a class="btn btn-primary" href="{{ url('mypage/results/'.$results->id) }}">戻る</a>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>
</div>

@endsection
