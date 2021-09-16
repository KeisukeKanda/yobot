<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $guarded = ['id'];
    

    //belongsTo設定
    public function available_institutions() {
        return $this->belongsTo('App\Available_Institution');
    }
  
    // リレーションシップ
    public function reviews() {
        return $this->hasMany(\App\Review::class, 'institution_id', 'id');
    }

}
