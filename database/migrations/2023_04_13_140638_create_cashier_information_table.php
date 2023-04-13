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
        Schema::create('cashier_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('money_check_id')
                ->constrained('money_check')
                ->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('patronymic');
            $table->integer('individual_taxpayer_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier_information');
    }
};
