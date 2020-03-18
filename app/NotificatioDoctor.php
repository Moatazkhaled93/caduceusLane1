<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificatioDoctor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notification_doctor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description', 'status', 'dateTime','user_id',
    ];
}
