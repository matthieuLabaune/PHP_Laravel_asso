<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'duration',
        'unity'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'memberships')->withPivot('payment_type','start_date', 'end_date')->withTimestamps();
    }
}
