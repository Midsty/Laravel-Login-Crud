<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artiest extends Model
{
    use HasFactory;
    protected $table = 'artiesten';
    protected $fillable = [
        'naam',
        'label',
        'video',
        'afbeelding',
    ];
}
