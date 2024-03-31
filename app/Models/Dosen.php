<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = [
        'kodeDsn',
        'namaDsn',
        'emailDsn',
        'teleponDsn',
        'fotoDsn',
        'NIDN',
    ];
}