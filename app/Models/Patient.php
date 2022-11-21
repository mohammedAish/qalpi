<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = ['patient_name','patient_ID','app_id','user_phone','patient_phone','serviceـprovider','patientsـnationality'];

    use HasFactory;


    // public function application()
    // {
    //     return $this->belongsTo(ِAppResearcher::class, 'aplication_id', 'id')
    //         ->withDefault();
    // }
    // public function services()
    // {
    //     return $this->belongsTo(Service::class, 'services_id', 'id')
    //         ->withDefault();
    // }
}
