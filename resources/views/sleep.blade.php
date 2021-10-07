<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/sky-1246033_1920.jpg') }}" class="img"></div>
    </div>
  </div>

  <h3>Sleep</h3>

  <p>良い覚醒をし、良いパフォーマンスを発揮すること</p>
  <p>その為に大事なものが睡眠です</p>
  <p>集中力・思考力・記憶力などの脳のコンディション</p>
  <p>気分や情動などのメンタルコンディション</p>
  <p>そして、ホルモンや免疫に関わる身体のコンディション</p>
  <p>この全ての鍵を握っています</p>


  <div class="main_container">
    <h3>What to know about sleep</h3>

    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/jiyeon-park-OshG1lLSNa4-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">睡眠時間は人それぞれ</div>
        </div>
        <div class="item_contents">
          <div class="contents">日中しっかり覚醒して過ごせるかどうかを睡眠充足の目安とし、睡眠時間自体にこだわらない方が良いでしょう</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/jordan-merrick-6cY1xBGn9ZI-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">入眠前は刺激物を避ける</div>
        </div>
        <div class="item_contents">
          <div class="contents">就寝前4時間のカフェイン、就寝前1時間の喫煙は避け、自分に合ったリラックス法で床に就くことが大事です</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/sammy-williams-DIBwWsoshGE-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">眠たくなってから床に就く</div>
        </div>
        <div class="item_contents">
          <div class="contents">不眠を自覚すると、床にいる時間を長くして不眠をカバーしようと早めに床に就くことが多いが、かえって逆効果となります</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/bruce-mars-wBuPCQiweuA-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">同じ時刻に毎日起床</div>
        </div>
        <div class="item_contents">
          <div class="contents">早寝早起きでなく、早起きが早寝に通じます。起床後なるべく早く太陽の光を浴びることが速やかで快適な入眠をもたらすことがわかってきています。起床後、目で感じた光は体内時計に伝えられ、体内時計のリズムをリセットする。そうすると、そこから約15〜16時間後に眠気が出現するようになっています。</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/lucas-ludwig-eOov7MDQzAk-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">光の利用で良い睡眠</div>
        </div>
        <div class="item_contents">
          <div class="contents">光による朝のリセットが行われないと、その夜に夜に寝つくことのできる時刻が約1時間遅れてしまいます。起床後2時間以上、暗い室内にいると体内時計のリセットが行われません。</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="/upload/bf.jpg" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">規則正しい食事、運動習慣</div>
        </div>
        <div class="item_contents">
          <div class="contents">規則正しく朝食をとっていると、朝食の1時間ほど前から消化器系の活動が活発になり、朝の目覚めを促進します。夜食を食べすぎると寝つきが悪くなり、夜中に目が覚め、睡眠の質が悪化することがあリマス。昼間の運動が夜間の睡眠を安定させ、睡眠の質を改善することがわかっています。</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/iStock-612742196-1.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">昼寝は15時前の20〜30分</div>
        </div>
        <div class="item_contents">
          <div class="contents">昼寝をするなら昼食後から15時までの時間帯における30分未満の規則正しい昼寝は、日中の眠気を解消し、眠気による作業能力低下を防止するのに役立ちます。</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/nezake.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">寝酒は不眠のもと</div>
        </div>
        <div class="item_contents">
          <div class="contents">睡眠薬がわりの寝酒は、深い睡眠を減らし、夜中に目覚める原因となり、全体として睡眠の質悪化を招きます。</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/nemuke.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">日中の眠気が強い時は要注意</div>
        </div>
        <div class="item_contents">
          <div class="contents">日中の過剰な眠気は睡眠不足（睡眠の量的低下）、睡眠時無呼吸などの睡眠障害（睡眠の質的低下）によるものがほとんどですが、中には過眠症などが隠れている場合があるので、十分な睡眠時間でも日中の眠気が改善しない場合は一度専門医の受診を検討してみてください。</div>
        </div>
      </div>


    </div>
  </div>
  <div class="back"><a class="btn btn-primary" href="/primary_prevention">戻る</a></div>
</div>
@endsection
