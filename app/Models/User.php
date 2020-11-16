<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'birthdate',
        'phone',
        'city',
        'zip_code',
        'address_1',
        'address_2',
        'role',
        'gender'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
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
        {
            return Carbon::parse($value)->format('d/m/Y');
        }
    }

    /**
     *
     * Mutator pour changer le format de retour dans la BDD (MYSQL format Y-M-D)
     *
     * @param $value
     */

/*    public function setBirthDateAttribute($value)
    {
        {
            $this->attributes['birthdate'] = Carbon::createFromFormat('d/m/Y', $value)->format('Y-m-d');
        }
    }*/

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function membership()
    {
        return $this->hasMany(Membership::class);
    }

}
