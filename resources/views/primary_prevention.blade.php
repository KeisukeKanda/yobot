<!-- resources/views/books.blade.php -->
<link href="{{ asset('css/main.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
    <!-- Recommendations: 推奨される項目の一覧 -->
    <div id="firstview">
        <h1>最高の健康を手に入れよう</h1>
    </div>
    
    <div class="wrap">
        <h2>健康的な身体になるには</h2>
        <div class="main">
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/2504916.jpg" class="img"></div>
                <div class="prevention_title"><p>食事</p></div>
            </div>
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/2520362.jpg" class="img"></div>
                <div class="prevention_title"><p>運動</p></div>
            </div>
        </div>
        <div class="main">
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/240427.jpg" class="img"></div>
                <div class="prevention_title"><p>睡眠</p></div>
            </div>
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/2571696.jpg" class="img"></div>
                <div class="prevention_title"><p>禁煙</p></div>
            </div>
        </div>
        <div class="main">
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/789516.jpg" class="img"></div>
                <div class="prevention_title"><p>飲酒</p></div>
            </div>
            <div class="primary_prevention">
                <div class="item_img"><img src="upload/2669157.jpg" class="img"></div>
                <div class="prevention_title"><p>予防接種</p></div>
            </div>
        </div>
        
        <div class="button_area">
            <p class="reminder_comment">プロフィールを登録して<br>あなたに今年度のオススメを表示<p>
            <div class="reminder"><a href="{{ url('mypage/edit-profile') }}" class="btn btn-primary">リマインダー設定</a></div>
        </div>
    </div>
@endsection