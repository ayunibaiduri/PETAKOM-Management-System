<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionModel extends Model
{
    use HasFactory;
    protected $table = 'candidates';
    protected $fillable = [
        'candidatename',
        'yearofstudy',
        'course',
        'category',
        'manifesto',
        'picture'
    ];
}
