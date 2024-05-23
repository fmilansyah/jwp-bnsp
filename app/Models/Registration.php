<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'polyclinic_id',
        'doctor_id',
        'date'
    ];

    public function polyclinic()
    {
        return $this->belongsTo(Polyclinic::class, 'polyclinic_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }
}
