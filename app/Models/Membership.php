<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function license()
    {
        return $this->belongsTo('App\Models\License');
    }
}
