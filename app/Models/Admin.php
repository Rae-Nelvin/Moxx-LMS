<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'alamat',
        'phone',
        'avatar',
        'roles'
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
     * Get the Photo associated with the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Photo(): HasOne
    {
        return $this->hasOne(Photo::class, 'id', 'avatar');
    }

    /**
     * Get the Role associated with the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Role(): HasOne
    {
        return $this->hasOne(Role::class, 'id', 'roles');
    }
}
