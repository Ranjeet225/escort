<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostAd extends Model
{
    protected $table = 'post_ads';
    protected $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
