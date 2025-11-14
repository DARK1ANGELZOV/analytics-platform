<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('direct_campaigns', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('direct_account_id')->constrained()->onDelete('cascade'); 
            $table->bigInteger('campaign_id'); 
            $table->string('name'); 
            $table->string('status'); 
            $table->timestamps(); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('direct_campaigns'); 
    } 
}; 
