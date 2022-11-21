<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Application extends User
{
    use HasFactory;
    protected $guard = 'application';

    protected $table = 'applications';

    protected $fillable = [
        'patient_name','gender','nationality','class','phone','email','code','id_number','id_number_end','city','neighborhood','rentـvalue',
        'relativeـname','phoneـname','relative','salary','medical_insurance_class','current_job',
        'telphone','medical_specialty','patient_condition','id_photo','medical_report','housing_contract',
        'definition_salary','visa_photo','other','status','file_researcher','files_patients','archive'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'aplication_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->withDefault();
    }

 public function patient()
    {
        return $this->hasOne(Patient::class, 'aplication_id', 'id');
    }
      public function appMovements()
    {
        return $this->hasMany(AppMovement::class, 'application_id', 'id');
    }
}
