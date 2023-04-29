<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'type_id',
        'project_id',
        'technology_id',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }
}
