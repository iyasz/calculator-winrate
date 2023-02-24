<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avatar extends Model
{
    use HasFactory;
    protected $table = 'avatar';

    protected $fillable = [
        'nama',
        'url'
    ];

    public $timestamps = FALSE;
}
