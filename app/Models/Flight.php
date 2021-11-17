<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Node\Block\Document;

class Flight extends Model
{
    use HasFactory;

    protected $table = 'flights';

    protected $fillable = [
        'hora_despuegue', 'hora_llegada', 'ciudad_origen', 'ciudad_destino'
    ];
    public function airlines()
    {
        return $this->belongsTo(Airline::class);
    }
}
