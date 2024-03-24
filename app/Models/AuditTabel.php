<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditTabel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Audit_Id';

    public function auditComments()
    {
        return $this->belongsTo(AuditComment::class, 'Audits_Comments_Id');
    }
}
