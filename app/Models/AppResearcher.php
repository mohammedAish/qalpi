<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppResearcher extends Model
{
    use HasFactory;

    protected $table = 'app_researchers';

    protected $fillable = [
        'aplication_id','patient_name','gender','age','nationality','id_number','id_number_end',
        'id_source','current_job','company_work','salary','medical_insurance_class','address','telphone',
        'social_status','numberـwives','educational_level','housing_type','housing_desc','rentـvalue','class',
        'relativeـname','relative','job_relative','id_relative','class_relative','salary_relative','phone_relative',
        'status_registered','company_registered','socialـevaluation','help_needed','cashing_needed',
        'patient_convert','patient_apologize','name_researcher','date_researcher',
    ];
    public function familyMembers()
    {
        return $this->hasMany(MemberFamily::class, 'researchers_id', 'id');
    }
}
