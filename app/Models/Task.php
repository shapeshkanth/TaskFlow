<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Add the fields that are allowed for mass assignment
    protected $fillable = ['title', 'description'];
}

