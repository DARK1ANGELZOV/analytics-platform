<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('goals', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('counter_id')->constrained('yandex_counters')->onDelete('cascade'); 
            $table->bigInteger('goal_id'); 
            $table->string('name'); 
            $table->boolean('is_conversion')->default(false); 
            $table->timestamps(); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('goals'); 
    } 
}; 
