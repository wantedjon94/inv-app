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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain')->nullable();
            $table->string('os')->nullable();
            $table->string('motherboard')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->string('cpu')->nullable();
            $table->string('dimm_1')->nullable();
            $table->string('dimm_2')->nullable();
            $table->string('dimm_3')->nullable();
            $table->string('dimm_4')->nullable();
            $table->string('videocard_1')->nullable();
            $table->string('videocard_2')->nullable();
            $table->string('nomenclature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
