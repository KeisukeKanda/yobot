@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('プロフィール') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mypage.edit-profile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->name}}</div>
                                <!-- <input id=" name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus> -->

                                <!-- @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail アドレス') }}</label>

                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->email}}</div>
                                <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email"> -->

                                <!-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->birthday}}</div>
                                <!-- <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{Auth::user()->birthday}}" required autocomplete="birthday"> -->
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <div class="form-control">
                                    <?php
                                    if ((Auth::user()->sex) == 1) {
                                        echo "男性";
                                    } elseif ((Auth::user()->sex) == 2) {
                                        echo "女性";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->zipcode}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->address1}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address2" class="col-md-4 col-form-label text-md-right">{{ __('市区町村') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->address2}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address3" class="col-md-4 col-form-label text-md-right">{{ __('町域') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->address3}}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address4" class="col-md-4 col-form-label text-md-right">{{ __('それ以降の住所') }}</label>
                            <div class="col-md-6">
                                <div class="form-control">{{Auth::user()->address4}}</div>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a class="btn btn-primary" href="{{ url('mypage/edit-profile') }}">プロフィール編集</a>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/zipcode.js') }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js" defer></script>
@endsection
