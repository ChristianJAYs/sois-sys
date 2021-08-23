<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_type',
    ];

    protected $primaryKey = 'role_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
