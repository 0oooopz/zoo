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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('money_check_id')
                ->constrained('money_check')
                ->onDelete('cascade');
            $table->string('ref_key');
            $table->string('line_number');
            $table->string('nomenclature_key');
            $table->string('product_unit_key');
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('sum');
            $table->integer('percentage_discounts_markups');
            $table->integer('percent_manual_discounts_markups');
            $table->integer('amount_discounted');
            $table->string('warehouse_key');
            $table->string('employee_key');
            $table->string('performer_key');
            $table->dateTime('date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
