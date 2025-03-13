<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;     // Import the SoftDeletes class
use Illuminate\Foundation\Auth\User as Authenticatable; // Import the Laravel Authenticatable class
use Illuminate\Notifications\Notifiable;              // Import the Laravel Notifiable class
use Laravel\Sanctum\HasApiTokens;                    // Import the Laravel Sanctum class

class Games extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes; // Use the HasApiTokens, Notifiable, and SoftDeletes traits

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'genre',
        'developer',
        'release_date',
        'price',
        'description',
        'image',
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
        'password' => 'hashed',
    ];
}