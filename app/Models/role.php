<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $table = 'role';
    public $timestamps = FALSE;
    protected $fillable = [
        'nama',
    ];
}
