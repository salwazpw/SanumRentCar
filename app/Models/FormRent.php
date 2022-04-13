<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormRent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table="form_rent";

    protected $fillable = [
        'NIK',
        'nama',
        'email',
        'jenisMobil',
        'alamat',
        'sopir',
        'jasa'
    ];
}
