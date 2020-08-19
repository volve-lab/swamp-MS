<?php

namespace App;
use App\demand;
use App\contract;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $fillable = ['demand_id','bank_receipt','comment','status'];

    public function demand(){
    	return $this->belongsTo(demand::class);
    }

    public function contract(){
    	return $this->hasOne(contract::class);
    }

}
