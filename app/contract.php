<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\payment;

class contract extends Model
{
    //
    protected $fillable = ['payment_id','start_date','end_date','status'];

    public function payment(){
    	return $this->belongsTo(payment::class);
    }

}
