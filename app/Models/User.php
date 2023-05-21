<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    // Настроим первчиынй ключ:
   // protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'email', 'nickname', 'birthday', 'password'
    ];

    protected $hidden = [
        'password'//, 'updated_at', 'created_at'
    ];

    // created_at - это дата регистрации 
    // use HasApiTokens, HasFactory, Notifiable;

    
}
