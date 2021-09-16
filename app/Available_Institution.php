<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Available_Institution extends Model
{
    //
    protected $table = 'available_institutions';
    
    protected $fillable = [
        'id',
        'user_address',
        'institution_address'
    ];
    
    //hasMany設定
      public function institutions()
      {
      return $this->hasMany('App\InstitutionsController');
      }
    
}
