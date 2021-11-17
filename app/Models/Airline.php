<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $table = 'airlines';
    protected $fillable = ['name_airline','desc_business','disponibility', 'city_id'];

    public function flight()
    {
        return $this->hasMany(Flight::class, 'airline_id');
    }
    // relation with City
    public function city(){
        return $this->belongsTo(City::class, 'city_id');
    }
    
}
