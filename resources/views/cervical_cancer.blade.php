@extends('layouts.app')
<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="/upload/648023.jpg" class="img"></div>
      <div class="contents">
        <div class="item_name"><i class="fas fa-square-full"></i> 子宮頸がん検診</div>
        <div class="item_content"><i class="far fa-calendar-alt"></i> 20歳以上の女性、2年に1回</div>
      </div>
    </div>
  </div>

  <h1>子宮頸がん検診について</h1>
  <p>●子宮頸がんは20歳代後半から30歳代後半という若い世代でかかりやすい病気です。</p>
  <p>●性交渉によってヒトパピローマウイルスというウイルスに感染することで、一部の方にゆっくりと前がん状態といわれる段階を経て子宮頸がんが発生することがあります。</p>
  <p>●2年に1回定期的な検診を受けることで、がんができても早期に発見・治療ができます。</p>
  <p class="video">【解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/7GQhYwcur4E" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>

  <div class="detail_button">
    <div class="back"><a class="btn btn-primary" href="/secondary_prevention">戻る</a></div>
  </div>
</div>
@endsection
