<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/'.$item->item_img.'') }}" class="img"></div>
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

  <h1>骨密度検査</h1>
  <p>●骨折しやすい腰椎（腰の骨）と大腿骨頚部（股関節の骨）を直接測定し、より重要で正確な診断をすることができます。</p>
  <p>●大腿骨頸部骨折や脊椎圧迫骨折を起こしたことがある方は骨密度の結果によらず、骨粗鬆症として治療が推奨されます。</p>

  <p class="video">【解説ビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/eoZzl5J7368" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>

  <p class="video">【実際の骨密度検査のビデオ】</p>
  <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
    <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/fwVGkN6dgKw" frameborder="0" allow="autoplay;
        encrypted-media" allowfullscreen>
    </iframe>
  </div>

</div>
@endsection
