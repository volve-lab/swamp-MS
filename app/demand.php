<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\payment;
use App\cooperative;
use App\swamp;

class demand extends Model
{
    //
    protected $fillable = ['swamp_id','cooperative_id','comment','status'];

    public function payment(){
    	return $this->hasOne(payment::class);
    }

    public function cooperative(){
    	return $this->belongsTo(cooperative::class);
    }

    public function swamp(){
    	return $this->belongsTo(swamp::class);
    }

}
