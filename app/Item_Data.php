<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_Data extends Model
{
    protected $table = 'item_data';

    public function image()
    {
        return $this->hasMany('App\Item_Image', 'code_item', 'code');
    }
    
    public function details()
    {
        return $this->hasMany('App\Item_Details', 'code_item', 'code');
    }
}
