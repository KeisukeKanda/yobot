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
    <p>最高の健康を引き出すこと<br>それは不具合や病気になりにくいということ</p>
    <p>その全てが予防医療にあります</p>
    <p>予防医療をとおして身体を調えることは<br>身体に本来備わっている<br>ポテンシャルを最大限引き出すことです</p>
    <p>それは毎日身体をどう扱うかに全てかかっています</p>
    <p></p>
    <div class="main">
        <div class="primary_prevention">
            <a href="primary_prevention" class="prevention_link">
                <div class="item_img"><img src="{{ asset('/upload/815683.png') }}" class="img"></div>
                <div class="item_contents">一次予防</div>
                <div class="item_title">身体の中から美しく<br>健康的になる</div>
            </a>
        </div>
        <div class="secondary_prevention">
            <a href="secondary_prevention" class="prevention_link">
                <div class="item_img"><img src="{{ asset('/upload/2571696.png') }}" class="img"></div>
                <div class="item_contents">二次予防</div>
                <div class="item_title">病気になっても<br>早期発見・早期治療</div>
            </a>
        </div>
    </div>

    <div class="button_area">
        <p class="reminder_comment">プロフィールを登録して<br>あなたに今年度のオススメを表示
        <p>
        <div class="reminder"><a href="{{ url('mypage/edit-profile') }}" class="btn btn-primary">リマインダー設定</a></div>
    </div>
</div>
@endsection
