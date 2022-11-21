<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use HasFactory;
    protected $table = 'services';

    protected $fillable = ['serviceـprovider','serviceـname','serviceـprice'];

    public function patient()
    {
        return $this->hasOne(Patient::class, 'services_id', 'id');
    }

}
