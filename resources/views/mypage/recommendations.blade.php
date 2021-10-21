<link href="{{ asset('css/recommendations.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
<!-- Recommendations: 推奨される項目の一覧 -->
<div id="firstview">
    <div class="firstview_text">
        <div class="firstview_phrase">あなた史上最高の</div>
        <div class="firstview_phrase">健康を手に入れよう</div>
    </div>
</div>
<div class="main">
    <div class="main_container">
        <h3>{{ Auth::user()->name }}さんの今年度のオススメ</h3>
        <div class="box">
            @if (count($items) > 0)
            @foreach ($items as $item)
            <div class="recommendation">
                <div class="recommendation-img">
                    <img src="{{ asset('/upload/'.$item->item_img.'') }}" class="img">
                </div>
                <div class="contents">
                    <div class="recommendation-title"><i class="fas fa-square-full"></i> {{ $item->item_name }}</div>
                    <div class="recommendation-content"><i class="far fa-calendar-alt"></i> {{ $item->item_content }}</div>
                </div>
                <div class="recommendation_action">
                    <a href="{{ url('/mypage/done/'.$item->id) }}" class="action_done">
                        <div class="recommendation_done">
                            <i class="far fa-check-circle fa-lg"></i> ︎実施済み
                        </div>
                    </a>
                    <a href="{{ url('/mypage/recommendation_detail/'.$item->id) }}" class="action_detail">
                        <div class="recommendation_go">
                            <i class="far fa-arrow-alt-circle-right fa-lg"></i> 詳細
                        </div>
                    </a>
                </div>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
