<?php 
namespace App\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany; 
 
class DirectCampaign extends Model 
{ 
    protected $table = 'direct_campaigns'; 
 
    protected $fillable = [ 
        'direct_account_id', 'campaign_id', 'name', 'status' 
    ]; 
 
    protected $casts = [ 
        'campaign_id' => 'integer', 
    ]; 
 
    public function directAccount(): BelongsTo 
    { 
        return $this->belongsTo(DirectAccount::class); 
    } 
 
    public function directCampaignMonthly(): HasMany 
    { 
        return $this->hasMany(DirectCampaignMonthly::class); 
    } 
} 
