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
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->text('airport_name');
            $table->text('airport_type');
            $table->text('owner');
            $table->text('city');
            $table->text('address');
            $table->dateTime('opdate');
            $table->text('altitude');
            $table->text('website');
            $table->text('rwl');
            $table->text('rws');
            $table->text('number');
            $table->text('geometrylat');
            $table->text('geometrylng');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
