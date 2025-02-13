<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingProperty extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id', 'check_in', 'check_out', 'guests',
        'total', 'name', 'email', 'phone', 'date', 'time'
    ];

    public function property() {
        return $this->belongsTo(Property::class);
    }
}
