<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "type_specialty",
        "sector_id",
    ];

    public function sectors()
    {
        return $this->belongsTo(Sector::class);
    }
}
