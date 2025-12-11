<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'main_image',
        'video_url',
        'is_featured',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }

    /**
     * Get types that belong to this project
     */
    public function types()
    {
        return $this->belongsToMany(ProjectType::class, 'project_project_type');
    }
}
