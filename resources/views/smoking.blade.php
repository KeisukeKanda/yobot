<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">
@extends('layouts.app')

@section('content')
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
      <div>600以上：肺がんを発症する危険性がかなり高い</div>
      <div>1200以上：喉頭癌を発症する危険性がかなり高い</div>
    </div>

    <h3>ニコチン依存度チェック</h3>

    <div class="main2">
      <table border="1" style="border-collapse: collapse" class="tds_tbl">
        <thead>
          <tr>
            <th colspan=" 4" class="tds_title">TDS(Tobacco Dependence Screener)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td class="tds_context_title">設問内容</td>
            <td class="select_box">1点</td>
            <td class="select_box">0点</td>
          </tr>
          <tr>
            <td>問1.</td>
            <td>自分が吸うつもりよりも、ずっと多くタバコを吸ってしまうことがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q1" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q1" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問2.</td>
            <td>禁煙や本数を減らそうと試みて、できなかったことがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q2" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q2" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問3.</td>
            <td>禁煙や本数を減らそうとしたときに、タバコがほしくてほしくてたまらなくなることがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q3" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q3" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問4.</td>
            <td>禁煙したり本数を減らそうとしたときに、次のどれかがありましたか？<br>（イライラ、神経質、落ちつかない、集中しにくい、ゆううつ、頭痛、眠気、胃のむかつき、脈が遅い、手のふるえ、食欲または体重増加）</td>
            <td class="tds_radio"><label><input type="radio" name="q4" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q4" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問5.</td>
            <td>問4でうかがった症状を消すために、またタバコを吸い始めることがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q5" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q5" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問6.</td>
            <td>重い病気にかかったときに、タバコはよくないとわかっているのに吸うことがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q6" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q6" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問7.</td>
            <td>タバコのために自分に健康問題が起きているとわかっていても、吸うことがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q7" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q7" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問8.</td>
            <td>タバコのために自分に精神的問題（※）が起きているとわかっていても、吸うことがありましたか？<br>※禁煙や本数を減らした時に出現する離脱症状（いわゆる禁断症状）ではなく、喫煙することによって神経質になったり、不安や抑うつなどの症状が出現している状態。</td>
            <td class="tds_radio"><label><input type="radio" name="q8" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q8" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問9.</td>
            <td>自分はタバコに依存していると感じることがありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q9" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q9" value="0"><br>no</label></td>
          </tr>
          <tr>
            <td>問10.</td>
            <td>タバコが吸えないような仕事やつきあいを避けることが何度かありましたか？</td>
            <td class="tds_radio"><label><input type="radio" name="q10" value="1"><br>yes</label></td>
            <td class="tds_radio"><label><input type="radio" name="q10" value="0"><br>no</label></td>
          </tr>
        </tbody>
      </table>
      <div class="score_button">
        <input type="button" value="依存度チェック" id="checkButton" onclick="buttonCheck()">
      </div>
      <div class="tds_result">
        <label for="tds">TDS</label>
        <input type="number" id="tds_score"> 点
      </div>
      <div class="tds_comment"><span id="tds_result_comment"></span></div>
      <!-- <div id="tds_result_comment"></div> -->
    </div>

    <p></p>

    <p>下記に該当し、禁煙を今すぐしたいと考えている方は<br>保険診療で禁煙外来を受診することができます<br>※ただし、1年以内に禁煙外来受診歴がない方が対象です</p>
    <div class="consultation_conditions">
      <p>①ブリンクマン指数が200以上</p>
      <p>②TDSが5点以上</p>
    </div>

    <div class="back"><a class="btn btn-primary" href="{{ asset('/primary_prevention') }}">戻る</a></div>
  </div>
</div>

  <script>
    function buttonClick() {
      const number_of_smoke = document.getElementById("num_smoke").value;
      const years_of_smoke = document.getElementById("years_smoke").value;
      const brinkman_index = number_of_smoke * years_of_smoke;
      document.getElementById("brinkman_result").value = brinkman_index;
    }

    function buttonCheck() {
      let i;
      let que1 = 0;
      let que2 = 0;
      let que3 = 0;
      let que4 = 0;
      let que5 = 0;
      let que6 = 0;
      let que7 = 0;
      let que8 = 0;
      let que9 = 0;
      let que10 = 0;
      const q1 = document.getElementsByName("q1");
      for (i = 0; i < q1.length; i++) {
        if (q1[i].checked) {
          que1 = q1[i].value;
          break;
        }
      }
      const q2 = document.getElementsByName("q2");
      for (i = 0; i < q1.length; i++) {
        if (q2[i].checked) {
          que2 = q2[i].value;
          break;
        }
      }
      const q3 = document.getElementsByName("q3");
      for (i = 0; i < q1.length; i++) {
        if (q3[i].checked) {
          que3 = q3[i].value;
          break;
        }
      }
      const q4 = document.getElementsByName("q4");
      for (i = 0; i < q1.length; i++) {
        if (q4[i].checked) {
          que4 = q4[i].value;
          break;
        }
      }
      const q5 = document.getElementsByName("q5");
      for (i = 0; i < q1.length; i++) {
        if (q5[i].checked) {
          que5 = q5[i].value;
          break;
        }
      }
      const q6 = document.getElementsByName("q6");
      for (i = 0; i < q1.length; i++) {
        if (q6[i].checked) {
          que6 = q6[i].value;
          break;
        }
      }
      const q7 = document.getElementsByName("q7");
      for (i = 0; i < q1.length; i++) {
        if (q7[i].checked) {
          que7 = q7[i].value;
          break;
        }
      }
      const q8 = document.getElementsByName("q8");
      for (i = 0; i < q1.length; i++) {
        if (q8[i].checked) {
          que8 = q8[i].value;
          break;
        }
      }
      const q9 = document.getElementsByName("q9");
      for (i = 0; i < q1.length; i++) {
        if (q9[i].checked) {
          que9 = q9[i].value;
          break;
        }
      }
      const q10 = document.getElementsByName("q10");
      for (i = 0; i < q1.length; i++) {
        if (q10[i].checked) {
          que10 = q10[i].value;
          break;
        }
      }
      const total_score = Number(que1) + Number(que2) + Number(que3) + Number(que4) + Number(que5) + Number(que6) + Number(que7) + Number(que8) + Number(que9) + Number(que10);
      document.getElementById("tds_score").value = total_score;

      if (total_score < 5) {
        document.getElementById("tds_result_comment").innerHTML = "ニコチン依存症には至っていませんね";
      } else {
        document.getElementById("tds_result_comment").innerHTML = "ニコチン依存症に該当します";
      }
    }
  </script>
  @endsection
