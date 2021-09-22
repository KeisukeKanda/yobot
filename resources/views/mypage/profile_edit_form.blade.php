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
                            <div class="card-header">{{ __('プロフィール　　登録するとマイページで今年度のオススメが表示されます') }}</div>
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('mypage.edit-profile') }}">
                                    @csrf
            
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('生年月日') }}</label>
                                        <div class="col-md-6">
                                          <input id="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{Auth::user()->birthday}}" required autocomplete="birthday">
                                        </div>
                                    </div>
                                    
                                    
            
                                    <div class="form-group row">
                                        <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>
            
                                        <div class="col-md-6">
                                            <select id="sex" name="sex" class="form-control @error('sex') is-invalid @enderror" value="{{ old('sex') }}" required autocomplete="sex">
                                                <option value="1">男性</option>
                                                <option value="2">女性</option>
                                            </select>
            
                                            @error('sex')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group row">
                                        <label for="zipcode" class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>
                                        <div class="col-md-6">
                                          <input id="input" type="text" class="zipcode form-control @error('zipcode') is-invalid @enderror" name="zipcode" value="{{Auth::user()->zipcode}}" placeholder="例)8120012" required autocomplete="zipcode">
                                          <button id="search" type="button">住所検索</button>
                                          <p id="error"></p>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="address1" class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>
                                        <div class="col-md-6">
                                          <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{Auth::user()->address1}}" value="" required autocomplete="address1">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="address2" class="col-md-4 col-form-label text-md-right">{{ __('市区町村') }}</label>
                                        <div class="col-md-6">
                                          <input id="address2" type="text" class="form-control @error('address2') is-invalid @enderror" name="address2" value="{{Auth::user()->address2}}" value="" required autocomplete="address2">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="address3" class="col-md-4 col-form-label text-md-right">{{ __('町域') }}</label>
                                        <div class="col-md-6">
                                          <input id="address3" type="text" class="form-control @error('address3') is-invalid @enderror" name="address3" value="{{Auth::user()->address3}}" value="" required autocomplete="address3">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="address4" class="col-md-4 col-form-label text-md-right">{{ __('それ以降の住所') }}</label>
                                        <div class="col-md-6">
                                          <input id="address4" type="text" class="form-control @error('address4') is-invalid @enderror" name="address4" value="{{Auth::user()->address4}}" value="" required autocomplete="address4">
                                        </div>
                                    </div>

                                     
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('更新') }}
                                            </button>
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


