<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminargroup extends Model
{
    use HasFactory;

    protected $table = 'seminargroups';
    protected $fillable = [
                'seminar_group',
    ];
}
