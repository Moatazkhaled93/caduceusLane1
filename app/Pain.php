<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pain';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    public function Patient()
    {
        return $this->hasMany('App\PatientDetiels');
    }
}
