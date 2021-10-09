
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
  <p>どんなに養生をしていても<br>病気になる時はなってしまいます</p>
  <p>しかし、その病気も早期に発見して<br>早期に対処することができれば<br>大きな障害とはならないでしょう</p>
  <p>そのための施策が二次予防です</p>
  <p>効果的な二次予防を提案します</p>
  <div class="main">
    <div class="primary_prevention">
      <a href="secondary_prevention/kenshin" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/22015770.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>定期健診</p>
        </div>
      </a>
    </div>
    <div class="primary_prevention">
      <a href="secondary_prevention/cervical_cancer" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/648023.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>子宮頸がん検診</p>
        </div>
      </a>
    </div>
  </div>
  <div class="main">
    <div class="primary_prevention">
      <a href="secondary_prevention/breast_cancer" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/427788.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>乳がん検診</p>
        </div>
      </a>
    </div>
    <div class="primary_prevention">
      <a href="secondary_prevention/lung_cancer" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/2451393.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>肺がん検診</p>
        </div>
      </a>
    </div>
  </div>
  <div class="main">
    <div class="primary_prevention">
      <a href="secondary_prevention/gastric_cancer" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/647967.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>胃がん検診</p>
        </div>
      </a>
    </div>
    <div class="primary_prevention">
      <a href="secondary_prevention/colon_cancer" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/106814.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>大腸がん検診</p>
        </div>
      </a>
    </div>
  </div>
  <div class="main">
    <div class="primary_prevention">
      <a href="secondary_prevention/bone" class="prevention_link">
        <div class="item_img"><img src="{{ asset('/upload/846548.jpg') }}" class="img"></div>
        <div class="prevention_title">
          <p>骨密度検査</p>
        </div>
      </a>
    </div>
  </div>

  <div class="button_area">
    <p class="reminder_comment">プロフィールを登録して<br>あなたに今年度のオススメを表示
    <p>
    <div class="reminder"><a href="{{ url('mypage/edit-profile') }}" class="btn btn-primary">リマインダー設定</a></div>
  </div>
  <div class="reminder"><a class="btn btn-primary" href="{{ url('/') }}">戻る</a></div>
</div>
@endsection
