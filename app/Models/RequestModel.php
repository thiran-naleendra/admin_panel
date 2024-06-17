<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model
{
    protected $table = 'jobs';
    public $timestamps = false;

    public $fillable = [
        'id','lot', 'street_no', 'street_name', 'suburb', 'postal_code', 
        'email', 'mobile_no', 'name', 'description', 'reference', 'image', 
        'status', 'site_visit_date', 'report_due_date', 'created_at', 'created_by', 
        'updated_at', 'updated_by',
    ];
}
