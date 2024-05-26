<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quiz';

    // Tambahkan kolom-kolom lainnya jika diperlukan
    protected $fillable = [
        'user_id',
        'nilai',
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15',
        'file1', 'file2', 'file3', 'file4', 'file5',
    ];    
}
