<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnrecognizedFaces extends Model
{
    protected $table = 'unrecognized_faces';
    protected $primaryKey = 'id';

    // An Unrecognized Face belongs to User
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // INVERSE: An Unrecognized Face has many Report Information
    public function report_information(){
        return $this->hasMany(ReportInformation::class);
    }
}
