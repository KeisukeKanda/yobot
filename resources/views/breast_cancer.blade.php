@extends('layouts.app')
<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="/upload/427788.jpg" class="img"></div>
      <div class="contents">
        <div class="item_name"><i class="fas fa-square-full"></i> 乳がん検診</div>
        <div class="item_content"><i class="far fa-calendar-alt"></i> 40歳から75歳までの女性、2年に1回</div>
      </div>
    </div>
  </div>

  <h1>乳がん検診について</h1>
  <p>●乳がんの死亡率を減少させることが科学的に認められ、乳がん検診として推奨できる検診方法は「乳房Ｘ線検査（マンモグラフィ）単独法」です。</p>
  <p>●乳房を片方ずつプラスチックの板で挟んで撮影することで、小さいしこりや石灰化を見つける検査です。乳房が圧迫されるため痛みを感じることもありますが圧迫時間は数十秒ほどです。また放射線被ばくによる健康被害はほとんどありません。</p>
  <p class="video">【解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/xRutVZ0egFk" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>

  <div class="detail_button">
    <div class="back"><a class="btn btn-primary" href="/secondary_prevention">戻る</a></div>
  </div>
</div>
@endsection
