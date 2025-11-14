<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
 
class SeoQueriesMonthly extends Model 
{ 
    protected $table = 'seo_queries_monthly'; 
 
    protected $fillable = [ 
        'project_id', 'year', 'month', 'query', 'position', 'url' 
    ]; 
 
    protected $casts = [ 
        'year' => 'integer', 
        'month' => 'integer', 
        'position' => 'integer', 
    ]; 
 
    public function project(): BelongsTo 
    { 
        return $this->belongsTo(Project::class); 
    } 
} 
