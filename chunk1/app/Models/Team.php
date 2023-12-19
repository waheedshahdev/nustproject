<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';
    protected $fillable = [
                'team_category',
                'name',
                'designation',
                'email',
                'phone',
                'image',
                'uploaded_by',
                'status'
    ];
}
