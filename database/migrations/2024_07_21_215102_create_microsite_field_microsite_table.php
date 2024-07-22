<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('microsite_field_microsite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('microsite_id')->constrained()->onDelete('cascade');
            $table->foreignId('microsite_field_id')->constrained()->onDelete('cascade');
            $table->boolean('is_required')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('microsite_field_microsite');
    }
};
