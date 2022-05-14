<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempProjectCategory extends Model
{
    use HasFactory;
    protected $table = "temp_project_category";
    public $timestamps = false;
    protected $fillable = [
        'project_id',
        'category_id',
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }
    public function getCategoryByProduct($id_product)
    {
        return  DB::table($this->table)
        ->leftjoin('project_category', 'project_category.id', '=', $this->table.'.category_id')
        ->where($this->table.'.project_id', $id_product)
        ->get();
    }
}
