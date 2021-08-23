<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_name',
        'organization_type',
        'organization_acronym',
    ];

    protected $primaryKey = 'organization_id';

    public function user()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
