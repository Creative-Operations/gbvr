<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forensics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_id')->constrained()->onDelete('cascade');
            $table->longText('remarks');
            $table->longText('legal')->nullable();
            $table->timestamp('legal_time')->nullable();
            $table->longText('police')->nullable();
            $table->timestamp('police_time')->nullable();
            $table->longText('medical')->nullable();
            $table->timestamp('medical_time')->nullable();
            $table->longText('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forensics');
    }
};
