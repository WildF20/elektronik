<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_electronic', function (Blueprint $table) {
            $table->string('id', 10);
            $table->string('type', 20)->default('');
            $table->timestamps();

            $table->primary(['id'], 'PK_m_electronic');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_electronic');
    }
};
