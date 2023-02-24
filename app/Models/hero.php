<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'role_id',
        'avatar_id',
        'deskripsi'
    ];
    protected $table = 'hero';
    public $timestamps = FALSE;

    public function role()
    {
        return $this->belongsTo(role::class);
    }
}
