<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientDetiels extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'patient_detiels';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */





    protected $fillable = [
        'frist_name','last_name','date_of_birth','phone','country','occupation','gender','email','pain_id',
    ];

    public function Pain()
    {
        return $this->belongsTo('App\Pain');
    }
}
