<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    use HasFactory;
    protected $fillable = [
        'Promotor_Name',
        'Promotor_Type',
        'Promotor_Previous_Project_Id',
        'Promotor_Previous_Project_Name',
        'Promotor_Comment_Id',
        'Promotor_Comments',
        'Promotor_Wallet_Id',
        'Promotor_Wallet_URL',
    ];
}
