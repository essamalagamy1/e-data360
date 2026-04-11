<?php

namespace App\Models;

use App\Observers\DesignRequestObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([DesignRequestObserver::class])]
class DesignRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'company_name',
        'project_type',
        'budget_range',
        'deadline',
        'details',
        'attachment_path',
        'status',
    ];
}
