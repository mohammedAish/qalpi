<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaptismRequest extends Model
{
    use HasFactory;
    protected $table='baptism_requests';
    protected $fillable = [
        'patientsـname','serviceـprovider','patientsـnationality',
        'patientsـid','user_name','patientsـphone','user_phone',
        'serviceـprice','serviceـname','app_id','typeـdiagnosis','reservation_num',
    ];
}
