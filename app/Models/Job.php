<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use SoftDeletes;

    protected $table = 'job';
    protected $fillable = [
        'name', 'log', 'retrycount', 'status', 'error'
    ];

}
