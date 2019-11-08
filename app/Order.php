<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'cart',
    ];
    public function user()
    {
        return  $this->belongsTo('App\User');
    }
}
