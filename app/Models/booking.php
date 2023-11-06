<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable=['id','pick_location','drop_location','service_id','user_id','status','estimated_cost','booking_date'];
    public function service()
    {
    return $this->belongsTo(Service::class);
    }
}
