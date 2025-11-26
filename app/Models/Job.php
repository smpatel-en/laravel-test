<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
    protected $table = "jobs_listing";

    protected $fillable = ["title", "location"];
}
