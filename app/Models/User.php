<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users';
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'first_name',
        'last_name',
        'phone_number',
        'user_address',
        'google_id',
        'email',
        'password',
        'link_avt',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin() : bool {
        if (Auth::check()) {
            $role = Auth::user()->role_id;
        }
        if ($role == 1)
            return true;
        return false;
    }

  public function isDeliveryMan() : bool {
    if (Auth::check()) {
      $role = Auth::user()->role_id;
    }
    if ($role == 2)
      return true;
    return false;
  }

  public function orders()
  {
    return $this->hasMany(Order::class);
  }

}
