<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forensic extends Model
{
    use HasFactory;

   //Relationship Investigation belongs to Incident
   public function incident() {
    return $this->belongsTo(Incident::class, 'incident_id');
   }

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'incident_id', 'remarks', 'legal', 'legal_time', 'police', 'police_time', 'medical', 'medical_time', 'status'
    ];

}
