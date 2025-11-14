<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
 
class MetricsAgeMonthly extends Model 
{ 
    protected $table = 'metrics_age_monthly'; 
 
    protected $fillable = [ 
        'project_id', 'year', 'month', 'age_group', 'visits', 
        'users', 'bounce_rate', 'avg_session_duration_sec' 
    ]; 
 
    protected $casts = [ 
        'year' => 'integer', 
        'month' => 'integer', 
        'visits' => 'integer', 
        'users' => 'integer', 
        'bounce_rate' => 'decimal:2', 
        'avg_session_duration_sec' => 'integer', 
    ]; 
 
    public function project(): BelongsTo 
    { 
        return $this->belongsTo(Project::class); 
    } 
} 
