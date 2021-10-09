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
            <!-- <div class="go"><a class="btn btn-primary" href="{{ url('/mypage/institutions/'.$item->id) }}">予約へ進む</a></div> -->
        </div>
    </div>

<h1>一般健康診断</h1>
<p>●健康診断は勤務先で年に１回行うことになっています。勤務先の案内に従ってください。</p>
<p>●国民健康保険加入者は、40歳から75歳未満の方は特定健康診査（特定健診）を受けることになるので自治体の指示に従ってください。</p>
<p>●75歳以上の後期高齢者医療制度加入者は各自治体で後期高齢者健康診査を行なっていますので、自治体の指示に従ってください。</p>

</div>


@endsection
