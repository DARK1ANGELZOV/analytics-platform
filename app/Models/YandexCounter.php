<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany; 
 
class YandexCounter extends Model 
{ 
    protected $table = 'yandex_counters'; 
 
    protected $fillable = [ 
        'project_id', 'counter_id', 'name', 'is_primary' 
    ]; 
 
    protected $casts = [ 
        'is_primary' => 'boolean', 
        'counter_id' => 'integer', 
    ]; 
 
    public function project(): BelongsTo 
    { 
        return $this->belongsTo(Project::class); 
    } 
 
    public function goals(): HasMany 
    { 
        return $this->hasMany(Goal::class); 
    } 
} 
