<?php

namespace App;
use App\demand;
use Illuminate\Database\Eloquent\Model;

class swamp extends Model
{
    //
    protected $fillable = ['district_id','name','amount','bank_account','status','comment','location'];
    
    public function demand(){
    	return $this->hasOne(demand::class);
    }

}
