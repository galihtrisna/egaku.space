<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class download_history extends Model
{
    use HasFactory;

    protected $table = 'download_history';
    protected $primaryKey = 'id';
    protected $fillable = ['id_image', 'id_user'];
}
