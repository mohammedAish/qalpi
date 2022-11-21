<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberFamily extends Model
{
    use HasFactory;
    protected $table='member_families';
    protected $fillable = [
        'name_member','relative_member','age_member','socical_status_member','status_member',
        'education_member','salary_member','researchers_id',
    ];
    public function researchers()
    {
        return $this->belongsTo(ِAppResearcher::class, 'researchers_id', 'id')
            ->withDefault();
    }
}
