<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
     * Создаем связь "многие ко многим"
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class);
    }

    /**
     * Проверяет является ли текущий пользователь админом
     * @return bool
     */
    public static function isAdmin(): bool
    {
        if (auth()->check()) {
            return User::where('id', auth()->id())
                ->first()
                ->groups
                ->where('id', Group::ADMIN_GROUP_ID)
                ->first() ? true : false;
        }

        return false;
    }

    public static function isGuest(): bool
    {
        if (!auth()->check()) {
            return true;
        }

        return false;
    }
}
