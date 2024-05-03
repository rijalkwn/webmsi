<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inbox_pengirim extends Model
{
    use HasFactory;

    protected $table = 'inbox_pengirim';

    protected $fillable = [
        'nama_pengirim',
        'email_pengirim',
        'nomor_hp',
        'pesan_pengirim',
    
    ];
}
