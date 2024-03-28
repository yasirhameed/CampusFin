<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'Developer_Name',
        'Developer_Website',
        'Developer_GitHub_Link',
        'Developer_Social_Media',
        'Developer_Previous_Project',
        'Developer_Comments_Id',
        'Developer_Comments',
    ];
}
