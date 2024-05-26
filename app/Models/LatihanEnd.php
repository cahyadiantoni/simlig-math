<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LatihanEnd extends Model
{
    use HasFactory;

    protected $table = 'pendapat';

    protected $fillable = [
        'user_id',
        'pendapat',
    ];    
}
