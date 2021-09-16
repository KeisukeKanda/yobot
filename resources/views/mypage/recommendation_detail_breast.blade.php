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

<h1>乳がん検診について</h1>
<p>乳がんの死亡率を減少させることが科学的に認められ、乳がん検診として推奨できる検診方法は「乳房Ｘ線検査（マンモグラフィ）単独法」です。</p>
<p>乳房を片方ずつプラスチックの板で挟んで撮影することで、小さいしこりや石灰化を見つける検査です。乳房が圧迫されるため痛みを感じることもありますが圧迫時間は数十秒ほどです。また放射線被ばくによる健康被害はほとんどありません。</p>

@endsection