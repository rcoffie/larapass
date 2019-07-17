<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'name', 'account_id', 'password','link','account_id','info'
    ];


    public function user(){

        return $this->belongsTo('App\User');
    }
}
