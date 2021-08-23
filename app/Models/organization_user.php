<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Organization;

class organization_user extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'status',
        'status_description',
    ];

    protected $primaryKey = 'org_user_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
    public function organization()
    {
        return $this->belongsToMany('App\Models\Organization');
    }
}
