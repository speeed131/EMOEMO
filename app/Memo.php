<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = ['memo_title', 'memo_text', 'user_id'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
