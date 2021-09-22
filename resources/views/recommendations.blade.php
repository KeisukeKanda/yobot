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
                <a href="primary_prevention">
                    <div class="item_img"><img src="upload/815683.jpg" class="img"></div>
                    <div class="item_title">身体の中から美しく<br>健康的になる</div>
                    <div class="item_contents">一次予防</div>
                </a>
            </div>
            <div class="secondary_prevention">
                <a href="primary_prevention">
                    <div class="item_img"><img src="upload/2571696.jpg" class="img"></div>
                    <div class="item_title">病気になっても<br>早期発見・早期治療</div>
                    <div class="item_contents">二次予防</div>
                </a>
            </div>
        </div>
        
        <div class="button_area">
            <p class="reminder_comment">プロフィールを登録して<br>あなたに今年度のオススメを表示<p>
            <div class="reminder"><a href="{{ url('mypage/edit-profile') }}" class="btn btn-primary">リマインダー設定</a></div>
        </div>
    </div>
@endsection