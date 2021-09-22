<link href="{{ asset('css/institution_detail.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

<div class="wrap">
    <div class="top">
        <div class="clinic_up">
            <div class="clinic_up_left">
                <div class="clinic_name">{{ $institution->name }}</div>
                <div class="clinic_address">
                    <div>〒{{ $institution->zipcode }}</div>
                    <div>{{ $institution->address1 }}{{ $institution->address2 }}{{ $institution->address3 }}{{ $institution->address4 }}</div>
                </div>
            </div>
            <div class="clinic_up_right">
                <div class="clinic_image">{{ $institution->institution_img }}</div>
            </div>
        </div>
        <div class="clinic_down">
            <div class="table_frame">
                <table class="clinic_table">
                    <tr>
                        <th>健診</th>
                        <th>胃（X線）</th>
                        <th>胃（内視鏡）</th>
                        <th>大腸（便）</th>
                        <th>肺がん</th>
                        <th>子宮がん</th>
                        <th>乳がん</th>
                        <th>骨密度</th>
                        <th>肝炎</th>
                    </tr>
                    <tr>
                        <td>{{ $institution->health_check }}</td>
                        <td>{{ $institution->gc_barium }}</td>
                        <td>{{ $institution->gc_endoscopy }}</td>
                        <td>{{ $institution->colon_cancer }}</td>
                        <td>{{ $institution->lung_cancer }}</td>
                        <td>{{ $institution->cervical_cancer }}</td>
                        <td>{{ $institution->mammography }}</td>
                        <td>{{ $institution->bone }}</td>
                        <td>{{ $institution->hepatitis }}</td>
                    </tr>
                </table>
            </div>
            <div class="tel_frame">
                <a href="{{ $institution->tel }}" class="clinic_tel">
                    <div class="tel_title">予約</div>
                    <div class="tel"><i class="fas fa-phone"></i> {{ $institution->tel }}</div>
                </a>
            </div>
        </div>
    </div>
    
    <div class="review">
        <h3> {{ $institution->name }}への口コミ</h3>
        @if (count($reviews) === 0)
            <div class="no_contribution">口コミの投稿はありません</div>
        @endif
        
        @if (count($reviews) > 0)
            @foreach ($reviews as $review)
                <div class="review_box">
                    <div class="contribution_user_name">{{ Auth::user()->name }}さんの投稿</div>
                    @if ($review->review_star === 1) 
                    <div class="review_star">★</div>
                    @elseif  ($review->review_star === 2) 
                    <div class="review_star">★★</div>
                    @elseif  ($review->review_star === 3) 
                    <div class="review_star">★★★</div>
                    @elseif  ($review->review_star === 4) 
                    <div class="review_star">★★★★</div>
                    @elseif  ($review->review_star === 5) 
                    <div class="review_star">★★★★★</div>
                    @endif
                    <div class="review_date">{{ $review->created_at }}にレビュー済み</div>
                    <div class="contribution_contents">{{ $review->review }}</div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="button_area">
        <div class="back"><a class="btn btn-primary" href="{{ url('/mypage/institutions/'.$item) }}">戻る</a></div>
        <div class="review_contribution"><a class="btn btn-primary" href="{{ url('mypage/institutions/'.$institution->id.'/contribute/'.$item) }}">口コミを投稿する</a></div>
    </div>
</div>
@endsection