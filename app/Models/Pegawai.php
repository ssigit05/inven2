<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pegawai extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable =[
        'nama',
        'username',
        'nip',
        'alamat'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
