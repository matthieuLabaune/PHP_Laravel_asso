<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\Membership as JetstreamMembership;

class Membership extends JetstreamMembership
{
    use HasFactory;

protected $fillable = [
    'user_id',
    'license_id',
    'payment_type'
];


    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

   /* public function user(){
        return $this->belongsTo(User::class);
    }

    public function license(){
        return $this->belongsTo(License::class);
    }*/
}
