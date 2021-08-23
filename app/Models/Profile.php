<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'user_img',
    ];

    protected $primaryKey = 'profile_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
