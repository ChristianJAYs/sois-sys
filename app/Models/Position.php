<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_type',
    ];

    protected $primaryKey = 'position_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
