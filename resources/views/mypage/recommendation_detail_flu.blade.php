<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')

<div class="wrap">
    <div class="top_container">
        <div class="top">
            <div class="item_img"><img src="/upload/{{$item->item_img}}" class="img"></div>
            <div class="contents">
                <div class="item_name"><i class="fas fa-square-full"></i> {{ $item->item_name }}</div>
                <div class="item_content"><i class="far fa-calendar-alt"></i> {{$item->item_content}}</div>
            </div>
        </div>
        <div class="detail_button">
            <div class="back"><a class="btn btn-primary" href="{{ url('/mypage/') }}">戻る</a></div>
            <div class="done"><a class="btn btn-primary" href="{{ url('/mypage/done/'.$item->id) }}">今年は実施済み</a></div>
        </div>
    </div>
    <h1>インフルエンザ予防接種について</h1>
    <p>●インフルエンザは毎年12月から3月にかけて流行する感染症です。</p>
    <p>●お子様ではまれに急性脳症を、御高齢の方や免疫力の低下している方では肺炎を伴う等、重症になることがあります。</p>
    <p>●インフルエンザの予防として、外出後の手洗い、適度な湿度の保持、十分な休養とバランスのとれた栄養摂取、人混みや繁華街への外出を控えるなど日常生活の中で気をつける事ができます。</p>
    <p>●インフルエンザワクチンは、感染後に発症する可能性を低減させる効果と、発症した場合の重症化防止に有効と報告されています。</p>
    <p>●13歳以上の方は、１回接種を原則としています。13歳未満の方は、２回接種です。</p>

    <p class="video">【解説ビデオ】</p>
    <div style="position: relative; padding-bottom: 56.25%;" class="youtube">
      <iframe
        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
        src="https://www.youtube.com/embed/tPq_EES78Eo"
        frameborder="0"
        allow="autoplay;
        encrypted-media"
        allowfullscreen>
      </iframe>
    </div>
</div>

@endsection
