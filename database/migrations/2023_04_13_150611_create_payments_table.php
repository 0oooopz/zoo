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
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('money_check_id')
                ->constrained('money_check')
                ->onDelete('cascade');
            $table->integer('amount');
            $table->integer('non_cash_amount');
            $table->integer('correction_amount');
            $table->integer('credit_amount');
            $table->integer('bonus_payment_amount');
            $table->integer('trade_discount_amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
