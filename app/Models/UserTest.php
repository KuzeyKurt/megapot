<?php


// тестовый юзер, потом создадим настоящего
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class UserTest extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
         'password', 'updated_at', 'created_at'
    ];
}
