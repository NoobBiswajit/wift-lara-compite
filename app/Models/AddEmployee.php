<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddEmployee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'designation',
        'fbLink',
        'emailLink',
        // Add any other attributes you want to allow for mass assignment
    ];
}
