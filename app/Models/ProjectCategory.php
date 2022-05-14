<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $table = "project_category";
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];
    public function project()
    {
        return $this->belongsToMany(Project::class,'temp_project_category');
    }
    public function projectCategory(){
        return $this->hasMany(Project::class);
    }
    
}
