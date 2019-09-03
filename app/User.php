<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use YoHang88\LetterAvatar\LetterAvatar;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','no_telepon','uid','status'
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

    protected $table = 'users';
    protected $appends = ['avatar'];

    public function getAvatarAttribute()
    {   
        $avatar = new LetterAvatar($this->name, 'circle', 64);
        ob_start(); //Start output buffer
        echo $avatar;
        $output = ob_get_contents(); //Grab output
        ob_end_clean();
        return $output;
    }

    public function getAvatar32Attribute()
    {   
        $avatar = new LetterAvatar($this->name, 'circle', 32);
        ob_start(); //Start output buffer
        echo $avatar;
        $output = ob_get_contents(); //Grab output
        ob_end_clean();
        return $output;
    }
}
