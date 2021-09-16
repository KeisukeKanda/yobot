@extends('layouts.app')
<link href="{{ asset('css/recommendations_detail.css') }}" rel="stylesheet">

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
            <div class="go"><a class="btn btn-primary" href="{{ url('/mypage/institutions/'.$item->id) }}">予約へ進む</a></div>
        </div>
    </div>
</div>
<h1>胃がん検診って？</h1>
<p>胃がん検診は胃内視鏡（胃カメラ）またはバリウムという液体を内服して行うレントゲン検査によって、胃の中に胃がんなどの異常がないかを検査する検診です。</p>
<p>なぜ症状がないのに、胃がん検診をするのかというと、胃がんはかなり進行しないと症状が出ないので、症状が出てから検査をして胃がんが見つかると手遅れになってしまう可能性があるからです。<br>
手遅れにならなくても、進行癌であれば手術ができても、全身麻酔でお腹を開けて、胃の一部または全部を切除する必要が出たりします。<br>
もしガンが胃以外の臓器に広がってしまっていると、手術では取りきれないので、抗がん剤治療をすることになりますが、その段階では完治をさせることは難しくなります。</p>

<p>なので、胃がん検診の目的は、症状のない段階で胃がんを早期の段階で発見することです。</p>
<p>早期の段階で発見することで、今では外科手術でお腹を開けて胃を切除しなくても、胃カメラを使ってお腹に傷をつけることなく胃の内側から胃の中のガンの部分だけを電気メスで剥ぎ取る治療で完治することも多いのです。</p>

<p>また、胃内視鏡をして胃の中を直接観察することで、ピロリ菌という細菌に感染した形跡のある胃がんになりやすい胃粘膜の状態なのかどうかも分かります。</p>

<h2>方法</h2>
<h3>胃内視鏡を使って検査する方法</h3>
<p>解説ビデオ</p>
<div><iframe width="560" height="315" src="https://www.youtube.com/embed/HbDbHJdu_zI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

<h3>バリウムを内服して行うレントゲン検査（胃X線検査）</h3>
<p>解説ビデオ</p>
<div><iframe width="560" height="315" src="https://www.youtube.com/embed/dZJBpmepiOs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

@endsection