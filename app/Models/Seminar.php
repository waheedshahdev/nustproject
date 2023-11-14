<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $table = 'seminars';
    protected $fillable = [
                'seminar_name',
                'seminar_image',
                'seminar_date',
                'seminar_description',
                'status',
                'uploaded_by'
    ];
}
