<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Mass assignment allow করতে হবে
    protected $fillable = [
        'name',
    ];
}
?>