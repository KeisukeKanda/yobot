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
}
