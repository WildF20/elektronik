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
        Schema::create('m_desktop', function (Blueprint $table) {
            $table->string('e_id', 10);
            $table->string('serial', 25);
            $table->string('description', 255)->default('');
            $table->string('ram', 10)->default('');
            $table->string('cpu', 25)->default('');
            $table->string('monitor', 25)->default('');
            $table->string('keyboard', 25)->default('');
            $table->string('mouse', 25)->default('');
            $table->string('power_supply', 25)->default('');
            $table->timestamps();

            $table->primary(['e_id', 'serial'], 'PK_m_desktop');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_desktop');
    }
};
