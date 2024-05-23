<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inpatient extends Model
{
    use HasFactory;

    const STATUS_IN_TREATMENT = 1;
    const STATUS_GO_HOME = 2;

    protected $fillable = [
        'registration_id',
        'room_id',
        'status',
    ];

    public function registration()
    {
        return $this->belongsTo(Registration::class, 'registration_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
