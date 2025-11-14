<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
 
class Goal extends Model 
{ 
    protected $table = 'goals'; 
 
    protected $fillable = [ 
        'counter_id', 'goal_id', 'name', 'is_conversion' 
    ]; 
 
    protected $casts = [ 
        'goal_id' => 'integer', 
        'is_conversion' => 'boolean', 
    ]; 
 
    public function yandexCounter(): BelongsTo 
    { 
        return $this->belongsTo(YandexCounter::class); 
    } 
} 
