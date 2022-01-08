<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Warning;
use App\Models\Project;

class Employee extends Model
{

    public function warning()
    {
        return $this->hasMany(Warning::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
