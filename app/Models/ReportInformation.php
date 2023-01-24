<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportInformation extends Model
{
    protected $table = 'report_information';
    protected $primaryKey = 'id';

    // A Report Information belongs to Unrecognized Faces
    public function unrecognized_faces(){
        return $this->belongsTo(UnrecognizedFaces::class);
    }
}
