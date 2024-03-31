<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateInvestor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_name',
        'social_media',
        'comments',
    ];
}
