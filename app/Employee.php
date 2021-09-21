<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'mail',
        'company_id',
    ];

    protected $with=['compnaines'];

    //one to many->side many
    public function company() {
        return $this->belongsTo('App\Company');
    }
}
