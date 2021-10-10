<link href="{{ asset('css/results.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
<div id="firstview">
    <h1>最高の健康を手に入れよう</h1>
</div>

<div class="wrap">
    <h2>{{ $item->item_name }}の結果</h2>
    <div class="main">
        <div class="done_date">
            <p class="date">{{ $result->done_date }}</p>
        </div>
        <div class="result_img"><img src="{{ asset('/result_upload/'.$result->result_file.'') }}" class="img"></div>
        <div class="result_comment"></div>
        <label>自己記録（コメント・メモ）</label>
        <div class="comment_frame">
            <p class="comment">{{ $result->result_comment }}</p>
        </div>
    </div>
    <div class="detail_button">
        <div class="back_button"><a class="btn btn-primary" href="{{ url('/mypage/done') }}">戻る</a></div>
        <div class="edit_button">
            <form action="{{ url('mypage/results/'.$result->id.'/edit') }}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">編集</button>
            </form>
        </div>
    </div>
</div>
@endsection
