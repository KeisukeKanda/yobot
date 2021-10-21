<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/201996.png') }}" class="img"></div>
      <div class="contents">
        <div class="item_name"><i class="fas fa-square-full"></i> 定期健診</div>
        <div class="item_content"><i class="far fa-calendar-alt"></i> 1年に1回</div>
      </div>
    </div>
  </div>

  <h1>一般健康診断</h1>
  <p>●健康診断は勤務先で年に１回行うことになっています。勤務先の案内に従ってください。</p>
  <p>●国民健康保険加入者は、40歳から75歳未満の方は特定健康診査（特定健診）を受けることになるので自治体の指示に従ってください。</p>
  <p>●75歳以上の後期高齢者医療制度加入者は各自治体で後期高齢者健康診査を行なっていますので自治体の指示に従ってください。</p>

  <div class="detail_button">
    <div class="back"><a class="btn btn-primary" href="{{ asset('/secondary_prevention') }}">戻る</a></div>
  </div>

</div>


@endsection
