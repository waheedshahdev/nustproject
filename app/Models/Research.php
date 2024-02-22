<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    protected $table = 'researchs';
    protected $fillable = [
                'category_id',
                'research_name',
                'research_date',
                'small_description',
                'research_text',
                'image',
                'thumbnil',
                'status'
    ];



    public function category()
        {
            return $this->belongsTo(Category::class, 'category_id', 'id');
        }
}
