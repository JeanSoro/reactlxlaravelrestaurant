<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{

    protected $table = 'food_categories';

    protected $fillable = [
        'title', 'description', 'image_url'
    ];
    
    public function food_items(){
        //foreign key = category_id
        return $this->hasMany('App\FoodItem', 'category_id');
    }
}
