<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    public function employee()
    {
        return $this->hasOne(Employee::class, 'user_id', 'id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function hasAnyRole($roles)
    {
        return $this->employee && in_array($this->employee->role, $roles);
    }

    // User.php (or your User model)

    public function isAdmin()
    {
        return $this->role === 'Admin';
    }
}
