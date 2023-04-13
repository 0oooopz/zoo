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
        Schema::create('product_sova_uds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('product_id')
                ->constrained('products')
                ->onDelete('cascade');
            $table->boolean('apply_discount');
            $table->integer('amount_without_discounts_on_line');
            $table->integer('whole_amount_without_discounts_on_line');
            $table->integer('percentage_of_additional_accrual');
            $table->integer('additional_amount_accrual');
            $table->integer('maximum_percentage_payment_points');
            $table->integer('maximum_payment_amount_points');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sova_uds');
    }
};
