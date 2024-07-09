<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "last_name",
        "age",
        "gender",
        "email",
        "phone",
        "address",
        "marital_status",
        "identification_card",
        "center_id",
        "career_id",
    ];

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function careers()
    {
        return $this->belongsTo(Career::class);
    }
}
