<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    public function up(): void 
    { 
        Schema::create('direct_accounts', function (Blueprint $table) { 
            $table->id(); 
            $table->foreignId('project_id')->constrained()->onDelete('cascade'); 
            $table->string('client_login'); 
            $table->string('account_name')->nullable(); 
            $table->timestamps(); 
        }); 
    } 
 
    public function down(): void 
    { 
        Schema::dropIfExists('direct_accounts'); 
    } 
}; 
