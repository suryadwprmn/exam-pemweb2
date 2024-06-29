<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lampu','harga','daya_watt','ketahanan','kualitas','cahaya_lumen'];
    protected $table = 'alternatifs';
}
