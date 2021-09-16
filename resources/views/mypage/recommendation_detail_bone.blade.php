@extends('layouts.app')
<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">

@section('content')

<div class="wrap">
    <div class="top_container">
        <div class="top">
            <div class="item_img"><img src="/upload/{{$item->item_img}}" class="img"></div>
            <div class="contents">
                <div class="item_name"><i class="fas fa-square-full"></i> {{ $item->item_name }}</div>
                <div class="item_content"><i class="far fa-calendar-alt"></i> {{$item->item_content}}</div>
            </div>
        </div>
        <div class="detail_button">
            <div class="back"><a class="btn btn-primary" href="{{ url('/mypage/') }}">戻る</a></div>
            <div class="done"><a class="btn btn-primary" href="{{ url('/mypage/done/'.$item->id) }}">今年は実施済み</a></div>
            <div class="go"><a class="btn btn-primary" href="{{ url('/mypage/institutions/'.$item->id) }}">予約へ進む</a></div>
        </div>
    </div>
</div>
<h1>骨密度検査</h1>
<p>骨折しやすい腰椎（腰の骨）と大腿骨頚部（股関節の骨）を直接測定し、より重要で正確な診断をすることができます。</p>
@endsection