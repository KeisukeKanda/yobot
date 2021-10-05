<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Validator;
use Auth;

class RecommendationsController extends Controller
{
    //
    public function showRecommendations() {
        $items = Item::orderBy('created_at', 'asc')->paginate(3);
        return view('recommendations', [
            'items' => $items
        ]);
    }

    // primary_prevention関連
    public function showPrimaryPrevention() {
        return view('primary_prevention');
    }

    public function showFood()
    {
        return view('food');
    }

    public function showExercise()
    {
        return view('exercise');
    }

    public function showSleep()
    {
        return view('sleep');
    }

    public function showSmoking()
    {
        return view('smoking');
    }

    public function showDrinking()
    {
        return view('drinking');
    }

    public function showVacctination()
    {
        return view('vaccination');
    }

    // secondary_prevention関連
    public function showSecondaryPrevention(){
        return view('secondary_prevention');
    }

    public function showKenshin() {
        return view('kenshin');
    }

    public function showCervicalCancer(){
        return view('cervical_cancer');
    }

    public function showBreastCancer()
    {
        return view('breast_cancer');
    }

    public function showLungCancer()
    {
        return view('lung_cancer');
    }

    public function showGastricCancer()
    {
        return view('gastric_cancer');
    }

    public function showColonCancer()
    {
        return view('colon_cancer');
    }

    public function showBone()
    {
        return view('bone');
    }
}
