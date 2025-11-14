<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('seo_queries_monthly', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); 
            $table->integer('year'); 
            $table->tinyInteger('month'); 
            $table->string('query'); 
            $table->integer('position'); 
            $table->string('url')->nullable(); 
            $table->timestamps(); 
            $table->index(['project_id', 'year', 'month']); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('seo_queries_monthly'); 
    } 
}; 
