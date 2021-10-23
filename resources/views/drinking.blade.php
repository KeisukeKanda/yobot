<link href="{{ asset('css/primary_prevention.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="wrap">
  <div class="top_container">
    <div class="top">
      <div class="item_img"><img src="{{ asset('/upload/yesmore-content-uob6xqPOvvU-unsplash.jpg') }}" class="img"></div>
    </div>
  </div>

  <h3>Drinking Alcohol</h3>
  <p>徒然草には<br>「酒は百薬の長とはいえど、<br>よろづの病は酒よりこそ起れ」<br>とあります</p>
  <p>実は、アルコールは「気分が晴れる」などの<br>薬理効果はあるかもしれませんが<br>肉体的な健康という視点での<br>メリットはほとんどありません</p>
  <p>アルコールの有害な使用は<br>世界の健康障害で最大のリスク要因の一つです</p>
  <p>節度をもって飲むことが大切です</p>

  <div class="main_container">
    <h3>1回の飲酒量を把握しましょう</h3>
    <div class="main">
      <div class="drinking_amount_calculator">
        <table border="1" style="border-collapse: collapse" class="drink_tbl">
          <thead>
            <tr>
              <th colspan="2" class="drinking_amount_title">純アルコール量を計算しましょう</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="drinking_kind">ビール（中）<br>摂取量：400ml<br>アルコール度数：5%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button1" onclick="minusClick1()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind1">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button1" onclick="plusClick1()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ビール350ml缶<br>摂取量：350ml<br>アルコール度数：5%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button2" onclick="minusClick2()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind2">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button2" onclick="plusClick2()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ビール500ml缶<br>摂取量：500ml<br>アルコール度数：5%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button3" onclick="minusClick3()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind3">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button3" onclick="plusClick3()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ビール大瓶<br>摂取量：633ml<br>アルコール度数：5%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button4" onclick="minusClick4()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind4">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button4" onclick="plusClick4()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">チューハイ（中）<br>摂取量：400ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button5" onclick="minusClick5()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind5">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button5" onclick="plusClick5()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">チューハイ350ml缶<br>摂取量：350ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button6" onclick="minusClick6()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind6">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button6" onclick="plusClick6()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">チューハイ500ml缶<br>摂取量：500ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button7" onclick="minusClick7()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind7">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button7" onclick="plusClick7()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ハイボール（中）<br>摂取量：400ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button8" onclick="minusClick8()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind8">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button8" onclick="plusClick8()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ハイボール350ml缶<br>摂取量：350ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button9" onclick="minusClick9()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind9">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button9" onclick="plusClick9()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ハイボール500ml缶<br>摂取量：500ml<br>アルコール度数：7%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button10" onclick="minusClick10()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind10">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button10" onclick="plusClick10()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ワイン（グラス）<br>摂取量：120ml<br>アルコール度数：12%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button11" onclick="minusClick11()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind11">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button11" onclick="plusClick11()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">ワイン（ボトル）<br>摂取量：720ml<br>アルコール度数：12%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button12" onclick="minusClick12()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind12">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button12" onclick="plusClick12()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">日本酒1合<br>摂取量：180ml<br>アルコール度数：15%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button13" onclick="minusClick13()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind13">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button13" onclick="plusClick13()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">焼酎水割り<br>摂取量：180ml<br>アルコール度数：15%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button14" onclick="minusClick14()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind14">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button14" onclick="plusClick14()"></i>
              </td>
            </tr>
            <tr>
              <td class="drinking_kind">焼酎ロック<br>摂取量：80ml<br>アルコール度数：25%</td>
              <td class="drinking_amount">
                <i class="fas fa-minus-square fa-2x amount_counter_minus" id="minus_button15" onclick="minusClick15()"></i>
                <input type="number" min="0" value="0" class="input_amount" id="kind15">
                <i class="fas fa-plus-square fa-2x amount_counter_plus" id="plus_button15" onclick="plusClick15()"></i>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="drinking_calculation">
          <input type="button" value="飲酒量を計算する" onclick="drinkCalculationButton()" class="drink_calculation_button">
        </div>

        <div class="drinking_amount_result">
          <div class="alcohol_amount">
            <label for="">純アルコール量</label>
            <input type="number" id="alcohol_amount_result">g
          </div>
          <div class="alcohol_drink">
            <label for="">ドリンク</label>
            <input type="number" id="drink_result">ドリンク
          </div>
        </div>
          <div class="drinking_amount_comment">
            <div>
              ※ 男性で週140g以上、女性で週70g以上の定期飲酒、もしくは２時間という短時間で男性50g、女性40g以上の飲酒は危険飲酒としてリスクの高い飲酒パターンです。それを超えないようにしましょう。
            </div>
          </div>
      </div>
    </div>

    <h3>問題飲酒の早期発見のためのテスト<br>AUDIT</h3>
    <div class="audit_calculator">
      <table border="1" style="border-collapse: collapse">
        <thead>
          <tr>
            <th colspan="1" class="audit_question">1.あなたはアルコール含有飲料（お酒）をどのくらいの頻度で飲みますか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q1" value="0">飲まない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q1" value="1">1ヶ月に1度以下
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q1" value="2">1ヶ月に2〜4度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q1" value="3">週に2〜3度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q1" value="4">週に4度以上
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">2.飲酒するときには通常どのくらいの量を飲みますか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q2" value="0">1〜２ドリンク
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q2" value="1">3〜4ドリンク
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q2" value="2">5〜6ドリンク
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q2" value="3">7〜9ドリンク
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q2" value="4">10ドリンク以上
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">3.1度に6ドリンク以上飲酒することがどのくらいの頻度でありますか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q3" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q3" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q3" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q3" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q3" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">4.過去1年間に、飲み始めると止められなかったことが、どのくらいの頻度でありましたか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q4" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q4" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q4" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q4" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q4" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">5.過去1年間に、普通だと行えることを飲酒していたためにできなかったことが、どのくらいの頻度でありましたか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q5" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q5" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q5" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q5" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q5" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">6.過去1年間に、深酒の後体調を整えるために、朝迎え酒をせねばならなかったことが、どのくらいの頻度でありましたか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q6" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q6" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q6" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q6" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q6" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">7.過去1年間に、飲酒後罪悪感や自責の念にかられたことが、どのくらいの頻度でありましたか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q7" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q7" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q7" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q7" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q7" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">8.過去1年間に、飲酒のため前夜の出来事を思い出せなかったことが、どのくらいの頻度でありましたか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q8" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q8" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q8" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q8" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q8" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">9.あなたの飲酒のために、あなた自身か他の誰かがけがをしたことがありますか？</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q9" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q9" value="1">1ヶ月に1度未満
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q9" value="2">1ヶ月に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q9" value="3">1週に1度
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q9" value="4">毎日あるいはほとんど毎日
              </label>
            </td>
          </tr>
        </tbody>
        <thead>
          <tr>
            <th colspan="1" class="audit_question">10.肉親や親戚、友人、医師、あるいは他の健康管理にたずさわる人が、あなたの飲酒について心配したり、飲酒量を減らすように勧めたりしたことがありますか？
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <label for="" class="audit_item">
                <input type="radio" name="q10" value="0">ない
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q10" value="2">あるが過去1年にはなし
              </label>
              <label for="" class="audit_item">
                <input type="radio" name="q10" value="4">過去1年間にある
              </label>
            </td>
          </tr>
        </tbody>
      </table>
      <div class="audit_calculation">
        <input type="button" value="判定" onclick="auditClick()" class="audit_calculation_button">
      </div>
      <div class="audit_result_box">
        <h6>判定結果</h6>
        <input type="number" id="audit_result">点
      </div>
      <div class="audit_comment">
        <div>
          ※ 0～7点： 今のままお酒と上手に付き合っていきましょう。
        </div>
        <div>
          ※ 8～14点： 飲酒問題が将来的に起きたり、あるいは既に生じている可能性があります。お酒の量を減らしていきましょう。
        </div>
        <div>
          ※ アルコール依存症の疑いがあります。自分の飲み方について精神保健福祉センターや依存症専門医療機関に相談してみましょう。
        </div>
      </div>
    </div>
    <div class="back"><a class="btn btn-primary" href="{{ asset('/primary_prevention') }}">戻る</a></div>
  </div>
</div>

<script>
  function plusClick1() {
    const inputNumber1 = document.getElementById("kind1");
    inputNumber1.value++;
  }

  function minusClick1() {
    const inputNumber1 = document.getElementById("kind1");
    if (inputNumber1.value >= 1) {
      inputNumber1.value--;
    }
  }

  function plusClick2() {
    const inputNumber2 = document.getElementById("kind2");
    inputNumber2.value++;
  }

  function minusClick2() {
    const inputNumber2 = document.getElementById("kind2");
    if (inputNumber2.value >= 1) {
      inputNumber2.value--;
    }
  }

  function plusClick3() {
    const inputNumber3 = document.getElementById("kind3");
    inputNumber3.value++;
  }

  function minusClick3() {
    const inputNumber3 = document.getElementById("kind3");
    if (inputNumber3.value >= 1) {
      inputNumber3.value--;
    }
  }

  function plusClick4() {
    const inputNumber4 = document.getElementById("kind4");
    inputNumber4.value++;
  }

  function minusClick4() {
    const inputNumber4 = document.getElementById("kind4");
    if (inputNumber4.value >= 1) {
      inputNumber4.value--;
    }
  }

  function plusClick5() {
    const inputNumber5 = document.getElementById("kind5");
    inputNumber5.value++;
  }

  function minusClick5() {
    const inputNumber5 = document.getElementById("kind5");
    if (inputNumber5.value >= 1) {
      inputNumber5.value--;
    }
  }

  function plusClick6() {
    const inputNumber6 = document.getElementById("kind6");
    inputNumber6.value++;
  }

  function minusClick6() {
    const inputNumber6 = document.getElementById("kind6");
    if (inputNumber6.value >= 1) {
      inputNumber6.value--;
    }
  }

  function plusClick7() {
    const inputNumber7 = document.getElementById("kind7");
    inputNumber7.value++;
  }

  function minusClick7() {
    const inputNumber7 = document.getElementById("kind7");
    if (inputNumber7.value >= 1) {
      inputNumber7.value--;
    }
  }

  function plusClick8() {
    const inputNumber8 = document.getElementById("kind8");
    inputNumber8.value++;
  }

  function minusClick8() {
    const inputNumber8 = document.getElementById("kind8");
    if (inputNumber8.value >= 1) {
      inputNumber8.value--;
    }
  }

  function plusClick9() {
    const inputNumber9 = document.getElementById("kind9");
    inputNumber9.value++;
  }

  function minusClick9() {
    const inputNumber9 = document.getElementById("kind9");
    if (inputNumber9.value >= 1) {
      inputNumber9.value--;
    }
  }

  function plusClick10() {
    const inputNumber10 = document.getElementById("kind10");
    inputNumber10.value++;
  }

  function minusClick10() {
    const inputNumber10 = document.getElementById("kind10");
    if (inputNumber10.value >= 1) {
      inputNumber10.value--;
    }
  }

  function plusClick11() {
    const inputNumber11 = document.getElementById("kind11");
    inputNumber11.value++;
  }

  function minusClick11() {
    const inputNumber11 = document.getElementById("kind11");
    if (inputNumber11.value >= 1) {
      inputNumber11.value--;
    }
  }

  function plusClick12() {
    const inputNumber12 = document.getElementById("kind12");
    inputNumber12.value++;
  }

  function minusClick12() {
    const inputNumber12 = document.getElementById("kind12");
    if (inputNumber12.value >= 1) {
      inputNumber12.value--;
    }
  }

  function plusClick13() {
    const inputNumber13 = document.getElementById("kind13");
    inputNumber13.value++;
  }

  function minusClick13() {
    const inputNumber13 = document.getElementById("kind13");
    if (inputNumber13.value >= 1) {
      inputNumber13.value--;
    }
  }

  function plusClick14() {
    const inputNumber14 = document.getElementById("kind14");
    inputNumber14.value++;
  }

  function minusClick14() {
    const inputNumber14 = document.getElementById("kind14");
    if (inputNumber14.value >= 1) {
      inputNumber14.value--;
    }
  }

  function plusClick15() {
    const inputNumber15 = document.getElementById("kind15");
    inputNumber15.value++;
  }

  function minusClick15() {
    const inputNumber15 = document.getElementById("kind15");
    if (inputNumber15.value >= 1) {
      inputNumber15.value--;
    }
  }

  function drinkCalculationButton() {
    const number1 = document.getElementById("kind1").value;
    const number2 = document.getElementById("kind2").value;
    const number3 = document.getElementById("kind3").value;
    const number4 = document.getElementById("kind4").value;
    const number5 = document.getElementById("kind5").value;
    const number6 = document.getElementById("kind6").value;
    const number7 = document.getElementById("kind7").value;
    const number8 = document.getElementById("kind8").value;
    const number9 = document.getElementById("kind9").value;
    const number10 = document.getElementById("kind10").value;
    const number11 = document.getElementById("kind11").value;
    const number12 = document.getElementById("kind12").value;
    const number13 = document.getElementById("kind13").value;
    const number14 = document.getElementById("kind14").value;
    const number15 = document.getElementById("kind15").value;

    const amount1 = 400 * number1 * 0.05 * 0.8
    const amount2 = 350 * number2 * 0.05 * 0.8
    const amount3 = 500 * number3 * 0.05 * 0.8
    const amount4 = 633 * number4 * 0.05 * 0.8
    const amount5 = 400 * number5 * 0.07 * 0.8
    const amount6 = 350 * number6 * 0.07 * 0.8
    const amount7 = 500 * number7 * 0.07 * 0.8
    const amount8 = 400 * number8 * 0.07 * 0.8
    const amount9 = 350 * number9 * 0.07 * 0.8
    const amount10 = 500 * number10 * 0.07 * 0.8
    const amount11 = 120 * number11 * 0.12 * 0.8
    const amount12 = 720 * number12 * 0.12 * 0.8
    const amount13 = 180 * number13 * 0.15 * 0.8
    const amount14 = 180 * number14 * 0.15 * 0.8
    const amount15 = 80 * number15 * 0.25 * 0.8

    const total_amount = amount1 + amount2 + amount3 + amount4 + amount5 + amount6 + amount7 + amount8 + amount9 + amount10 + amount11 + amount12 + amount13 + amount14 + amount15;
    const alcohol_amount_result = document.getElementById("alcohol_amount_result");
    alcohol_amount_result.value = total_amount;

    const drink_result = document.getElementById("drink_result");
    const drink = total_amount / 10;
    drink_result.value = Math.ceil(drink * 100) / 100;
  }

  function auditClick() {
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
        que1 = Number(q1[i].value);
        break;
      }
    }
    const q2 = document.getElementsByName("q2");
    for (i = 0; i < q2.length; i++) {
      if (q2[i].checked) {
        que2 = Number(q2[i].value);
        break;
      }
    }
    const q3 = document.getElementsByName("q3");
    for (i = 0; i < q3.length; i++) {
      if (q3[i].checked) {
        que3 = Number(q3[i].value);
        break;
      }
    }
    const q4 = document.getElementsByName("q4");
    for (i = 0; i < q4.length; i++) {
      if (q4[i].checked) {
        que4 = Number(q4[i].value);
        break;
      }
    }
    const q5 = document.getElementsByName("q5");
    for (i = 0; i < q5.length; i++) {
      if (q5[i].checked) {
        que5 = Number(q5[i].value);
        break;
      }
    }
    const q6 = document.getElementsByName("q6");
    for (i = 0; i < q6.length; i++) {
      if (q6[i].checked) {
        que6 = Number(q6[i].value);
        break;
      }
    }
    const q7 = document.getElementsByName("q7");
    for (i = 0; i < q7.length; i++) {
      if (q7[i].checked) {
        que7 = Number(q7[i].value);
        break;
      }
    }
    const q8 = document.getElementsByName("q8");
    for (i = 0; i < q8.length; i++) {
      if (q8[i].checked) {
        que8 = Number(q8[i].value);
        break;
      }
    }
    const q9 = document.getElementsByName("q9");
    for (i = 0; i < q9.length; i++) {
      if (q9[i].checked) {
        que9 = Number(q9[i].value);
        break;
      }
    }
    const q10 = document.getElementsByName("q10");
    for (i = 0; i < q10.length; i++) {
      if (q10[i].checked) {
        que10 = Number(q10[i].value);
        break;
      }
    }

    const audit_score = que1 + que2 + que3 + que4 + que5 + que6 + que7 + que8 + que9 + que10;
    console.log(audit_score);
    // const audit_score = Number(que1) + Number(que2) + Number(que3) + Number(que4) + Number(que5) + Number(que6) + Number(que7) + Number(que8) + Number(que9) + Number(que10);
    document.getElementById("audit_result").value = audit_score;
  }
</script>
@endsection
