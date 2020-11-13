<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gender',
        'role',
        'name',
        'first_name',
        'birthdate',
        'phone',
        'email',
        'password',
        'city',
        'zip_code',
        'address_1',
        'address_2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Accessor pour changer le format de la date dans les views
     *
     * @param $value
     * @return string
     */
    public function getBirthDateAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    /**
     *
     * Mutator pour changer le format de retour dans la BDD (MYSQL format Y-M-D)
     *
     * @param $value
     */
    public function setBirthDateAttribute($value)
    {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
    }
}
