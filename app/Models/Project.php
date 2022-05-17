<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "project";
    public $timestamps = false;
    protected $fillable = [
        'title',
        'thumbnail',
        'link_app',
        'github',
        'content',
        'created_at'
    ];
    public function tempCategory()
    {
        return $this->hasMany(TempProjectCategory::class);
    }
    public function category()
    {
        return $this->belongsToMany(Project::class,'temp_project_category','project_id','category_id');
    }
    public function categoryes()
    {
        return $this->belongsToMany(ProjectCategory::class,'temp_project_category','project_id','category_id');
    }
}
