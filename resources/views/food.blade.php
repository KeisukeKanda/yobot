<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="/upload/brooke-lark-jUPOXXRNdcA-unsplash.jpg" class="img"></div>
    </div>
  </div>

  <h3>Food</h3>

  <p>You are what you eat.</p>
  <p>あなたの身体は<br>あなたが日々何を口にするかで決まります</p>
  <p>本来は身体の声に耳を傾けて<br>その時の自分の身体に必要な食べ物を食べる</p>
  <p>それが最も健康的な食べ方です</p>
  <p>しかしその境地に至ることは意外に難しい</p>
  <p>ジャンクフードや甘いものは<br>身体が欲しているのではなく<br>マインドが欲している可能性が高い</p>
  <p>身体の声を聞こえるまで<br>私たちは健康的なものを食すことで身体を整え<br>マインドで濁った五感を研ぎ澄ませましょう</p>

  <div class="main_container">
    <h3>Sustainable Healthy Diet</h3>

    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="/upload/paddy-fields-4689951_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">お米は白米ではなく玄米</div>
        </div>
        <div class="item_contents">
          <div class="contents">主食であるお米は精製された白米ではなく、玄米にすることで肥満を予防します</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/wesual-click-rsWZ-P9FbQ4-unsplash.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">小麦は全粒粉</div>
        </div>
        <div class="item_contents">
          <div class="contents">パンやパスタなどの小麦は精製された小麦粉ではなく、全粒粉にすることで肥満や動脈硬化のリスクを下げます</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/fish-5399709_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">魚</div>
        </div>
        <div class="item_contents">
          <div class="contents">魚を食べると心筋梗塞や乳がんのリスク、死亡リスクを下げることが分かっています</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/salad-2756467_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">野菜や果物</div>
        </div>
        <div class="item_contents">
          <div class="contents">野菜や果物は1日400g以上摂取することが薦められます</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/nut-3021258_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">豆類やナッツ</div>
        </div>
        <div class="item_contents">
          <div class="contents">豆類やナッツ類を豊富に摂取することで健康アウトカムが上昇します</div>
        </div>
      </div>
    </div>
  </div>

  <p>東洋医学の考え方には、<br>食物にも陰と陽があり、同じものばかり食べると<br>身体はそのベクトルに傾いてしまう</p>
  <p>なるべく多種類のものを<br>バランス良く摂り入れましょう</p>
  <p>それに加えて<br>出来るだけ旬の食物を味わいましょう</p>


  <div class="main_container">
    <h3>Not reccomended food</h3>
    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="/upload/beef-3267625_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">赤身肉はcarcinogenic food</div>
        </div>
        <div class="item_contents">
          <div class="contents">牛肉や豚肉などの赤身肉はWHOの指針で発がん性のある食物と認定されています</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/sausage-4873861_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">加工肉はcarcinogenic food</div>
        </div>
        <div class="item_contents">
          <div class="contents">ソーセージやウインナー、ハムなどの赤身肉の加工肉も発がん性のある食物と認定されています</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/milk-1385548_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">牛乳や乳製品</div>
        </div>
        <div class="item_contents">
          <div class="contents">乳製品の摂取量が多くなると前立腺癌や卵巣癌のリスクが上昇する可能性があります</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/sugar-5040276_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">砂糖・甘いもの</div>
        </div>
        <div class="item_contents">
          <div class="contents">WHOの指針では砂糖の摂取量は1日20gまでに抑えることが肥満などの予防に重要とされています</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/salt-1884166_1920.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">塩分</div>
        </div>
        <div class="item_contents">
          <div class="contents">WHOの指針では塩の摂取量を成人は1日5g未満にすることが高血圧や慢性腎臓病の予防に求められています</div>
        </div>
      </div>
    </div>

    <p></p>
    <p>健康や環境、社会文化的な持続可能性を<br>担保するための指針として<br>WHOが提唱した内容を元にしております</p>
    <p>まずは健康に良さそうと思うものを一生懸命探すより<br>健康に悪いと分かっているものを摂らない<br>足し算の発想より引き算の発想をするのが良いでしょう</p>
    <p></p>
    <p>※ただし、民族や遺伝子によってこれまでの<br>長い生活様式の中で狩猟を主な食料源にしていた人たち<br>にとっての理想の食生活は異なる可能性があります</p>
  </div>
  <div class="back"><a class="btn btn-primary" href="/primary_prevention">戻る</a></div>
</div>
@endsection
