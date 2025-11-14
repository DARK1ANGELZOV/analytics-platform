<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany; 
 
class DirectAccount extends Model 
{ 
    protected $table = 'direct_accounts'; 
 
    protected $fillable = [ 
        'project_id', 'client_login', 'account_name' 
    ]; 
 
    public function project(): BelongsTo 
    { 
        return $this->belongsTo(Project::class); 
    } 
 
    public function directCampaigns(): HasMany 
    { 
        return $this->hasMany(DirectCampaign::class); 
    } 
} 
