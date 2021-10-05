<link href="{{ asset('css/main.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')
<div id="firstview">
    <div class="firstview_text">
        <div class="firstview_phrase">あなた史上最高の</div>
        <div class="firstview_phrase">健康を手に入れよう</div>
    </div>
</div>

<div class="wrap">
    <p></p>
    <p></p>
    <p>身体の中から美しくなること</p>
    <p>それは最高の体調を引き出し<br>病気になりにくい身体を作ること</p>
    <p>そのための方法が養生です</p>
    <p>一次予防とは養生することそのものです</p>
    <div class="main">
        <div class="primary_prevention">
            <a href="primary_prevention/food" class="prevention_link">
                <div class="item_img"><img src="upload/2504916.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>食事</p>
                </div>
            </a>
        </div>
        <div class="primary_prevention">
            <a href="primary_prevention/exercise" class="prevention_link">
                <div class="item_img"><img src="upload/2520362.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>運動</p>
                </div>
            </a>
        </div>
    </div>
    <div class="main">
        <div class="primary_prevention">
            <a href="primary_prevention/sleep" class="prevention_link">
                <div class="item_img"><img src="upload/240427.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>睡眠</p>
                </div>
            </a>
        </div>
        <div class="primary_prevention">
            <a href="primary_prevention/smoking" class="prevention_link">
                <div class="item_img"><img src="upload/290193.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>禁煙</p>
                </div>
            </a>
        </div>
    </div>
    <div class="main">
        <div class="primary_prevention">
            <a href="primary_prevention/drinking" class="prevention_link">
                <div class="item_img"><img src="upload/789516.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>飲酒</p>
                </div>
            </a>
        </div>
        <div class="primary_prevention">
            <a href="primary_prevention/vaccination" class="prevention_link">
                <div class="item_img"><img src="upload/2669157.jpg" class="img"></div>
                <div class="prevention_title">
                    <p>予防接種</p>
                </div>
            </a>
        </div>
    </div>

    <div class="button_area">
        <p class="reminder_comment">プロフィールを登録して<br>あなたに今年度のオススメを表示</p>
        <div class="reminder"><a href="{{ url('mypage/edit-profile') }}" class="btn btn-primary">リマインダー設定</a></div>
    </div>
    <div class="reminder"><a class="btn btn-primary" href="/">戻る</a></div>
</div>
@endsection
