<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Incident extends Model
{
    use HasFactory;

   // Relationship incident belongs to user
   public function user() {
    return $this->belongsTo(User::class, 'user_id');
   }

   //Relationship Investigation belongs to Incident
   public function forensic() {
    return $this->hasMany(Forensic::class, 'incident_id');
   }

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'user_id','victim', 'mobile', 'location', 'address', 'attack_type', 'other', 'attacker', 'description'
    ];
}
