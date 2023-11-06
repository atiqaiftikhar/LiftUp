<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable=['id','name','description','service_img','base_fare','fare_per_km','category_id'];

    // public function bookings()
    // {
    // return $this->hasMany(Service::class);
    // }
}
