<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;use SoftDeletes;
    protected $fillable=[
        'name',
        'logo',
        'email',
        'adresse',
        'Number',
        'boss',
        'manager',
        'description',
        'video'
    ];
}
