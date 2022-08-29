<?php

namespace App\Models\admin;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{
    use  Notifiable;

    // use HasApiTokens, HasFactory, Notifiable;

}
