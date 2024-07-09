<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "duration",
        "sector_id",
        "speciality_id",
    ];

    public function sectors()
    {
        return $this->belongsTo(Sector::class);
    }

    public function specialties()
    {
        return $this->belongsTo(Specialty::class);
    }
}
