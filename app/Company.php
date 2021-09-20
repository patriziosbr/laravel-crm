<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'logo',
        'vat_number'
    ];

    protected $with = [ 'employee' ]; 

    //one to many-> side one
    public function employee() {
        return $this->hasMany('App\Employee');
    }

    //one to many-> side many
    public function user() {
        return $this->belongsTo('App\User');
    }
}
