<link href="{{ asset('css/institutions.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

<div class="wrap">
    @foreach ($institutions as $institution)
    <div class="main">
        <div class="clinic_up">
            <div class="clinic_up_left">
                <div class="clinic_name">{{ $institution->name }}</div>
                <div class="clinic_address">
                    <div>〒{{ $institution->zipcode }}</div>
                    <div>{{ $institution->address1 }}{{ $institution->address2 }}{{ $institution->address3 }}{{ $institution->address4 }}</div>
                    <div class="clinic_review"><a class="review_link" href="{{ url('mypage/institutions/'.$institution->id.'/review/'.$item) }}"><i class="far fa-comment-dots review_icon"></i> 口コミ</a></div>
                </div>
            </div>
            <div class="clinic_up_right">
                <div class="clinic_image">
                    <div class="clinic_image"><img src="{{ asset('/institutions_upload/'.$institution->institution_img.'') }}" class="clinic_image"></div>
                </div>
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
    @endforeach

    <div class="detail_button">
        <div class="back"><a class="btn btn-primary" href="{{ url('/mypage/recommendation_detail/'.$item) }}">戻る</a></div>
    </div>
</div>

@endsection
