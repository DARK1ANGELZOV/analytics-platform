<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('metrics_age_monthly', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); 
            $table->integer('year'); 
            $table->tinyInteger('month'); 
            $table->enum('age_group', ['18-24', '25-34', '35-44', '45-54', '55+', 'unknown']); 
            $table->integer('visits')->default(0); 
            $table->integer('users')->default(0); 
            $table->decimal('bounce_rate', 5, 2)->default(0); 
            $table->integer('avg_session_duration_sec')->default(0); 
            $table->timestamps(); 
            $table->unique(['project_id', 'year', 'month', 'age_group']); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('metrics_age_monthly'); 
    } 
}; 
