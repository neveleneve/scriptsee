<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid_Placement extends Model
{
    protected $table = 'bid_placement';
    protected $fillable = [
        'bid_token',
        'code_item',
        'id_buyer',
    ];
    public function nama()
    {
        return $this->hasMany('App\User_Data_Buyer', 'id', 'id_buyer');
    }
}
