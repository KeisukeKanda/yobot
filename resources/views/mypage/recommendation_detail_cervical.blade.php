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

    <h1>子宮頸がん検診について</h1>
    <p>●子宮頸がんは20歳代後半から30歳代後半という若い世代でかかりやすい病気です。</p>
    <p>●性交渉によってヒトパピローマウイルスというウイルスに感染することで、一部の方にゆっくりと前がん状態といわれる段階を経て子宮頸がんが発生することがあります。</p>
    <p>●2年に1回定期的な検診を受けることで、がんができても早期に発見・治療ができます。</p>
    <p class="video">【解説ビデオ】</p>
    <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
      <iframe 
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
        src="https://www.youtube.com/embed/7GQhYwcur4E" 
        frameborder="0" 
        allow="autoplay; 
        encrypted-media" 
        allowfullscreen>
      </iframe>
    </div>
</div>
@endsection