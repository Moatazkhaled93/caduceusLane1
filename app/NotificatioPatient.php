<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificatioPatient extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_patient';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'status', 'dateTime','user_id',
    ];
}
