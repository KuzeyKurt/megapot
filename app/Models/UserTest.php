<?php


// тестовый юзер, потом создадим настоящего
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'created_at'
    ];
}
