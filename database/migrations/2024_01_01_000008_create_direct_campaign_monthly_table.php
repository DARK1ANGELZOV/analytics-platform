<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('direct_campaign_monthly', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('direct_campaign_id')->constrained()->onDelete('cascade'); 
            $table->integer('year'); 
            $table->tinyInteger('month'); 
            $table->integer('impressions')->default(0); 
            $table->integer('clicks')->default(0); 
            $table->decimal('ctr_pct', 6, 2)->default(0); 
            $table->decimal('cpc', 12, 2)->default(0); 
            $table->integer('conversions')->nullable(); 
            $table->decimal('cpa', 12, 2)->nullable(); 
            $table->decimal('cost', 14, 2)->default(0); 
            $table->timestamps(); 
            $table->unique(['project_id', 'direct_campaign_id', 'year', 'month']); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('direct_campaign_monthly'); 
    } 
}; 
