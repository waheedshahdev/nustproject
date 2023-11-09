<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $fillable = [
                'download_group_id',
                'document_name',
                'status',
                'pdf_file',
    ];


    public function groupName()
        {
            return $this->belongsTo(DownloadGroup::class, 'download_group_id', 'id');
        }

        
}
