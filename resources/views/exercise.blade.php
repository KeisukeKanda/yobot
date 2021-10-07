<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/woman-1822459_1920.jpg') }}" class="img"></div>
    </div>
  </div>

  <h3>Exercise</h3>

  <p>Every move counts.</p>
  <p>健康を維持するだけであれば<br>ちょっとした身体活動にも意味がある</p>
  <p>仕事やスポーツ、余暇、移動だけでなく、<br>日常の生活活動や家事も身体活動に含まれる</p>
  <p>しかし<br>最高の体調を引き出すには<br>より多くの運動が必要である</p>

  <div class="main_container">
    <h3>Children and adolescents<br>(aged 5 - 17 years)</h3>

    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/football-1807520_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも1日60分の中高強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/1751231063-huge.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">筋力向上活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に3日は高強度の有酸素性身体活動や筋力・骨を強化する身体活動を取り入れるべきである</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/children-593313_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">座位行動</div>
        </div>
        <div class="item_contents">
          <div class="contents">座りっぱなしで過ごす時間、特に余暇時間におけるスクリーンタイムを減らしましょう</div>
        </div>
      </div>
    </div>

    <div class="comment_box">
      <p></p>
      <p>子供や青少年では、身体活動により<br>体力（心肺体力・筋力）の向上、心血管代謝 の健康<br>（血圧、脂質異常症、血糖値、インスリン抵抗性）<br>骨の健康、認知的健康（学業成績、実行機能）<br>精神的健康（うつ症状の軽減）<br>および肥満の減少といった様々な健康効果が得られる。</p>
    </div>
  </div>



  <div class="main_container">
    <h3>Adult (aged 18 - 64 years)</h3>
    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/taiji-3033963_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動①</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2時間半から5時間の中強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/tennis-shot-934845_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動②</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に1時間15分から2時間半の高強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/mil-tech-pharma-ltd-DauroWovTcM-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">筋力向上活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2日以上すべての主要筋群を使って中強度以上の強度で筋肉を強化する活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/trail-running-1245982_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動③</div>
        </div>
        <div class="item_contents">
          <div class="contents">さらなる健康のために週5時間以上の中強度または週2時間半以上の高強度の有酸素性の身体活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/entrepreneur-593371_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">座位行動</div>
        </div>
        <div class="item_contents">
          <div class="contents">座りっぱなしで過ごす時間を減らし、どんな強度（軽強度を含む）でも良いので、身体活動を増やす</div>
        </div>
      </div>
    </div>

    <div class="comment_box">
      <p></p>
      <p>成人では、身体活動により<br>総死亡率や循環器疾患による死亡率の低下<br>高血圧や部位別のがん、2型糖尿病の発症の予防<br>メンタルヘルス（不安やうつ症状の軽減）や<br>認知的健康、睡眠の向上、および<br>肥満の指標の改善といった様々な健康効果が得られる</p>
    </div>
    <p>※部位別のがん:膀胱がん、乳がん、結腸がん、子宮内膜がん、食道腺がん、胃がん、腎がん</p>
  </div>

  <div class="main_container">
    <h3>Older adults<br>(aged 65 years and older)</h3>
    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/shutterstock_718879159.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動①</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2時間半から5時間の中強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/shutterstock_283994948.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動②</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に1時間15分から2時間半の高強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/shutterstock_64356301.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">筋力向上活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2日以上すべての主要筋群を使って中強度以上の強度で筋肉を強化する活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/shutterstock_674449108.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">パルチコンポーネント身体活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">中等度以上の強度で、機能的なバランスと筋力トレーニングを重視した多様な要素を含む身体活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/trail-running-1245982_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動③</div>
        </div>
        <div class="item_contents">
          <div class="contents">さらなる健康のために週5時間以上の中強度または週2時間半以上の高強度の有酸素性の身体活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/mariia-chalaya-aODtyhXEAjg-unsplash.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">座位行動</div>
        </div>
        <div class="item_contents">
          <div class="contents">座りっぱなしで過ごす時間を減らし、どんな強度（軽強度を含む）でも良いので、身体活動を増やす</div>
        </div>
      </div>
    </div>

    <div class="comment_box">
      <p></p>
      <p>高齢者では、身体活動により<br>総死亡率や心血管系疾患による死亡率の低下<br>高血圧や部位別のがん、2型糖尿病の発症の予防<br>メンタルヘルス（不安やうつ症状の軽減）や<br>認知的健康、睡眠の向上、および<br>肥満の指標の改善といった様々な健康効果が得られる<br>また、身体活動は転倒や転倒に関連した<br>傷害の予防に役立ち<br>骨の健康と機能的能力の低下を防ぐことができる。</p>
    </div>
  </div>

  <div class="main_container">
    <h3>Pregnant and<br>Postpartum woman</h3>
    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/pregnant-2568395_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2時間半の中強度の有酸素性身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/pregnant-woman-bridges.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">骨盤底筋トレーニング</div>
        </div>
        <div class="item_contents">
          <div class="contents">骨盤底筋のトレーニングを日常的に行うことで、尿失禁のリスクを減らすことができます</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/baby-bump-3537364_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">座位行動</div>
        </div>
        <div class="item_contents">
          <div class="contents">座りっぱなしで過ごす時間を減らし、どんな強度（軽強度を含む）でも良いので、身体活動を増やす</div>
        </div>
      </div>
    </div>

    <div class="comment_box">
      <p></p>
      <p>妊娠中・産後の女性では、身体活動により<br>子癇前症、妊娠高血圧症、妊娠糖尿病、<br>過剰な妊娠中の体重増加、分娩合併症および産後うつ、<br>新生児合併症のリスクを減少させることができる。<br>妊娠中・産後の身体活動による<br>出生体重への悪影響や死産のリスクの増加はない。</p>
    </div>

    <div class="attention">
      <h5>妊婦が身体活動を行う際に考慮すべき<br>安全上の注意事項</h5>
      <div>•過度の暑さ、特に湿度が高いときは運動を避ける。</div>
      <div>•身体活動の前、中、後に水を飲んで水分補給をする。</div>
      <div>•身体的な接触を伴う身体活動、転倒の危険性が高い姿勢、酸素供給を制限する可能性のある活動（例えば、普段高地で生活していない場合の高地での活動）は避ける。</div>
      <div>•妊娠中期以降は、仰臥位での活動を避ける。</div>
      <div>•妊婦が運動競技への参加を考え、上記を大幅に超える運動を行う場合は、専門の医療者の監督を仰ぐべきである。</div>
      <div>•帝王切開による分娩の場合は分娩後、医療者と相談の上、徐々に身体活動を再開する。</div>
    </div>
  </div>

  <div class="main_container">
    <h3>Adults and older adults<br>with chronic conditions<br>(aged 18 years and older)</h3>
    <div class="main">
      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/people-2557546_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動①</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2時間半から5時間の中強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/swimming-78112_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動②</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に1時間15分から2時間半の高強度の身体活動を実施する</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/remove-4559344_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">筋力向上活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">少なくとも週に2日以上すべての主要筋群を使って中強度以上の強度で筋肉を強化する活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/model-4669520_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">パルチコンポーネント身体活動</div>
        </div>
        <div class="item_contents">
          <div class="contents">中等度以上の強度で、機能的なバランスと筋力トレーニングを重視した多様な要素を含む身体活動を行う</div>
        </div>
      </div>

      <div class="box">
        <div class="item_image">
          <img src="{{ asset('/upload/people-2583452_1920.jpg') }}" alt="" class="food_img">
        </div>
        <div class="item_title">
          <div class="title">有酸素性身体活動③</div>
        </div>
        <div class="item_contents">
          <div class="contents">さらなる健康のために週5時間以上の中強度または週2時間半以上の高強度の有酸素性の身体活動を行う</div>
        </div>
      </div>
    </div>
  </div>

  <p>※慢性疾患<br>がんサバイバー、高血圧、2型糖尿病、HIV感染</p>

  <div class="explanation">
    <div>※中強度の活動:心拍数が上がり、呼吸が速くなる活動</div>
    <div>※高強度の活動:さらに呼吸が荒く速くなる程の活動</div>
  </div>

  <div class="back"><a class="btn btn-primary" href="{{ asset('/primary_prevention') }}">戻る</a></div>
</div>
@endsection
