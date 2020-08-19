<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\demand;

class cooperative_info extends Model
{
    //
    protected $fillable = ['certificate','services','names','email','phone','leader','location','status','cooperative_id'];

    public function demand(){
    	return $this->hasOne(demand::class);
    }

}
