<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'email',
        'name',
        'password',
        'role_id',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public static function validationMessages(): array
    {
        return [
            'email.required' => 'Please write a valid Email.',
            'email.min' => 'The email must have data after the @',
            'password.required' => 'Please input a valid Password.',
        ];
    }
}
