<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class course_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'status_description',
    ];

    protected $primaryKey = 'course_user_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function course()
    {
        return $this->belongsToMany('App\Models\Course');
    }
}
