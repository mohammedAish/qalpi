<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostRequest extends Model
{
    use HasFactory;
    protected $table='cost_requests';
    protected $fillable = [
        'patientsـname','serviceـprovider','patientsـnationality',
        'patientsـid','user_name','patientsـphone','user_phone',
    ];

}
