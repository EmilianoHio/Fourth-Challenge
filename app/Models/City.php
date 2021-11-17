<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model{
    
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['name_city'];


    // relation uno a muchos
    public function Airlines()
    {
        return $this->hasMany(Airline::class, 'city_id');
    }

}
