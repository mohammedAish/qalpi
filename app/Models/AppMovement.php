<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppMovement extends Model
{
    use HasFactory;

    protected $table='app_movements';
    protected $fillable = [
        'user_id','application_id','status',
    ];
    public function applications()
    {
        return $this->belongsTo(Application::class, 'application_id', 'id')
            ->withDefault();
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->withDefault();
    }
}
