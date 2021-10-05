@extends('layouts.app')
<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="/upload/106814.jpg" class="img"></div>
      <div class="contents">
        <div class="item_name"><i class="fas fa-square-full"></i> 大腸がん検診（便潜血検査）</div>
        <div class="item_content"><i class="far fa-calendar-alt"></i> 40歳以上の男女、1年に1回</div>
      </div>
    </div>
  </div>

  <h1>大腸がん検診</h1>
  <p>●大腸がん死亡率減少効果を示す十分な証拠があることから、検診として便潜血検査を強く推奨します。</p>
  <p>●大腸がん検診で引っかかった場合、精密検査として全大腸内視鏡検査（大腸カメラ）を行います。</p>
  <p>●普段から血便や便に血が混じるなどの症状がある方や既にポリープなどがあることが分かっている方は、最初から全大腸内視鏡検査（大腸カメラ）を受けることをおすすめします。</p>
  <p>●S状結腸鏡検査や全大腸内視鏡検査、注腸X線検査は行うことで死亡率減少効果を示す相当の証拠はありますが、検査に伴うリスクが無視できるとは言い切れないため、集団検診としてではなく、個別で受診することが望ましいです。</p>
  <p class="video">【大腸がん検診の解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/ziEd5ae9O10" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>
  <p></p>
  <p></p>
  <p class="video">【便潜血検査の解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/0VEdUioYOAQ" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>
  <p></p>
  <p></p>
  <p class="video">【全大腸内視鏡検査（大腸カメラ）の解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/5w6KTNJ1XxY" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>

  <div class="detail_button">
    <div class="back"><a class="btn btn-primary" href="/secondary_prevention">戻る</a></div>
  </div>
</div>
@endsection
