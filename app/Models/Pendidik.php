<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidik extends Model
{
    protected $table = 'pendidik';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_pendidik', 'nip', 'id_bidang', 'foto'];
    protected $attributes = ['nip' => null];
}
