<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //リレーションシップ
    public function user() { // 👈 追加

        return $this->belongsTo(\App\User::class, 'user_id', 'id')
            ->select('id', 'name');

    }
}
