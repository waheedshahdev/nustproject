<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Downloadgroup extends Model
{
    use HasFactory;


    protected $table = 'downloadgroups';
    protected $fillable = [
                'group_name',
                'description',
                'status'
    ];


    public function documents()
    {
        return $this->hasMany(Document::class, 'download_group_id');
    }

    public function doc()
    {
        return $this->hasOne(Document::class, 'download_group_id');
    }
}
