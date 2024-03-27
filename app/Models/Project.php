<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project_table';

    protected $fillable = [
        'Project_Name',
        'Project_Logo',
        'Project_Symbol',
        'Project_Type',
        'Project_Domain',
        'Project_Category',
        'Project_Launch_Date',
        'Token_Standard',
        'BlockChain_Plateform',
        'Project_Website',
        'Project_GitHub_Link',
        'Project_WhitePaper',
        'Project_Comment',
        'Project_Comment_Id',
        'Project_Total_Supply',
        'Project_Circulating_Supply',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
