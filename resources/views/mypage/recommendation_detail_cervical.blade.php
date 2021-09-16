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

<h1>子宮頸がん検診について</h1>
<p>子宮頸がんは20歳代後半から30歳代後半という若い世代でかかりやすい病気です。</p>
<p>性交渉によってヒトパピローマウイルスというウイルスに感染することで、ゆっくりと前がん状態といわれる段階から浸潤がん（進行がん）へと進んでいきます。</p>

@endsection