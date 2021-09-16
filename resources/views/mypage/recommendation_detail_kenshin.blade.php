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

<h1>一般健康診断</h1>
<p>健康診断は勤務先で年に１回行うことになっています。勤務先の案内に従ってください。</p>
<p>勤務していない方や、退職後の国民健康保険加入者は、40歳から75歳未満の方は特定健康診査を受けることになるので各自治体へ確認してください。</p>
<p>75歳以上の方は各自治体で後期高齢者健康診査を行なっていますので、各自治体へご確認ください。</p>

@endsection


