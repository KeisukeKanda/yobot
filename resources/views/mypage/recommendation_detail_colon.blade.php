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
<h1>大腸がん検診</h1>
<p>大腸がん死亡率減少効果を示す十分な証拠があることから、対策型検診・任意型検診として便潜血検査（特に免疫法）を強く推奨します。</p>
@endsection