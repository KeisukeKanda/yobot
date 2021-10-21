<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')

<div class="wrap">
    <div class="top_container">
        <div class="top">
            <div class="item_img"><img src="{{ asset('/upload/'.$item->item_img.'') }}" class="img"></div>
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

    <h1>肺がん検診について</h1>
    <p>●肺がんの死亡率を減少させることができると科学的に認められ、肺がん検診として推奨できる検診方法は「胸部Ｘ線検査（胸部レントゲン検査）」と、「喀痰細胞診（喫煙者のみ）」を組み合わせた方法だけです（喀痰細胞診は単独では行いません）。</p>
    <p>●低線量の胸部CTによる肺がん検診は、死亡率減少効果の有無を判断する証拠が不十分であるため、集団検診としてではなく、人間ドックなどで個別にご相談ください。</p>

    <p class="video">【解説ビデオ】</p>
    <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/1Fzrk8Bih3c" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
        </iframe>
    </div>

    @endsection
