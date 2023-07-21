<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable

{
    use HasFactory;
    use Notifiable;

    protected $table = 'users';

    protected $fillable = 
    [
        'name', 'email',
        'password', 'agreement',
        'role'
    ];

    protected $hidden = 
    [
        'password'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
