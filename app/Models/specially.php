<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specially extends Model
{
    use HasFactory;

    protected $table = 'specially';

    public $timestamps = FALSE;

    protected $fillable = [
        'hero_id',
        'nama',
    ];
}
