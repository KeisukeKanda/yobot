<link href="{{ asset('css/institution_review.css') }}" rel="stylesheet">

@extends('layouts.app')
@section('content')

<div class="wrap">
    <!-- バリデーションエラーの表示に使用-->
    @include('common.errors')
    <!-- バリデーションエラーの表示に使用-->

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
                <div class="clinic_image"><img src="{{ asset('/institutions_upload/'.$institution->institution_img.'') }}" class="clinic_image"></div>
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

    <h3> {{ $institution->name }}への口コミ</h3>
    <div class="review_contribute_area">
        <form enctype="multipart/form-data" action="{{ url('mypage/institutions/'.$institution->id.'/store/'.$item) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="evaluation">
                <input id="star1" type="radio" name="review_star" value="5" />
                <label for="star1"><span class="text">最高</span>★</label>
                <input id="star2" type="radio" name="review_star" value="4" />
                <label for="star2"><span class="text">良い</span>★</label>
                <input id="star3" type="radio" name="review_star" value="3" />
                <label for="star3"><span class="text">普通</span>★</label>
                <input id="star4" type="radio" name="review_star" value="2" />
                <label for="star4"><span class="text">悪い</span>★</label>
                <input id="star5" type="radio" name="review_star" value="1" />
                <label for="star5"><span class="text">最悪</span>★</label>
            </div>

            <div class="review_comment">
                <div class="comment_frame"><textarea type="text" name="review" value="" class="comment_area" style="overflow:auto;"></textarea></div>
            </div>

            <div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            </div>

            <div>
                <input type="hidden" name="institution_id" value="{{ $institution->id }}">
            </div>

            <div class="contribution_button">
                <div>
                    <a class="btn btn-primary" href="{{ url('mypage/institutions/'.$institution->id.'/review/'.$item) }}">戻る</a>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </div>
        </form>
    </div>
    @endsection
