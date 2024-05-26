<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KunciJawaban extends Model
{
    use HasFactory;

    protected $table = 'kunci_jawaban';

    // Tambahkan kolom-kolom lainnya jika diperlukan
    protected $fillable = [
        '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15',
    ];    
}
