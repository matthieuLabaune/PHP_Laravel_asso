<?php

namespace App\Models;

use Laravel\Jetstream\Membership as JetstreamMembership;

class Membership extends JetstreamMembership
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function license(){
        return $this->belongsTo(License::class);
    }
}
