<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
現在開発中
<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/mathew-macquarrie-lzcKZlVPYaU-unsplash.jpg') }}" class="img"></div>
    </div>
  </div>

  <h3>Smoking</h3>

  <p>喫煙、それは<br>2016年に世界で最も多い<br>死亡および障害調整生存年（DALY）の<br>危険因子として特定されました。</p>
  <p>喫煙は肺がんだけではなく<br>ほとんどの部位のがんの原因になります</p>
  <p>20歳以前に喫煙を始めると、<br>男性は8年、女性は10年寿命が短縮します。</p>
  <p>それでも、あなたは喫煙をしますか？</p>


  <div class="main_container">
    <h3>これまであなたが喫煙してきた影響</h3>

    <div class="main">
      <div class="brinkman_calculator">
        <div>
          <label for="number_of_smoke">1日の喫煙本数（平均）</label>
          <input type="number" id="num_smoke"> 本
        </div>
        <div>
          <label for="years_of_smoke">喫煙年数</label>
          <input type="number" id="years_smoke"> 年
        </div>
        <div>
          <input type="button" value="計 算" id="calc_button" onclick="buttonClick()">
        </div>
        <div>
          <label for="brinkman_index">ブリンクマン指数</label>
          <input type="number" id="brinkman_result">
        </div>
      </div>
    </div>

    <div class="brinkman_evaluation">
      <div>400以上：肺がんを発症する危険性が高い</div>
      <div>600以上：肺がんを発症する危険性がかなり高い</>
      <div>1200以上：喉頭癌を発症する危険性がかなり高い</div>
    </div>
  </div>
  <div class="back"><a class="btn btn-primary" href="{{ asset('/primary_prevention') }}">戻る</a></div>
</div>

<script>
  function buttonClick() {
    const number_of_smoke = document.getElementById("num_smoke").value;
    const years_of_smoke = document.getElementById("years_smoke").value;
    const brinkman_index = number_of_smoke * years_of_smoke;
    document.getElementById("brinkman_result").value = brinkman_index;
  }
</script>
@endsection
