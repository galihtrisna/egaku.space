<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    use HasFactory;

    protected $table = 'shares';
    protected $primaryKey = 'id';
    protected $fillable = ['file', 'Name', 'Description', 'Category', 'Name_of_user', 'Email_of_user'];
}
