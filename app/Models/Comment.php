<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table='comments';
    protected $fillable = [
        'comment','user_id','aplication_id',
    ];
    public function applications()
    {
        return $this->belongsTo(Application::class, 'aplication_id', 'id')
            ->withDefault();
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')
            ->withDefault();
    }
}
