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
        Schema::create('money_checker_sova_uds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('money_check_id')
                ->constrained('money_check')
                ->onDelete('cascade');
            $table->integer('discount_rate');
            $table->string('client_id');
            $table->string('operation_id');
            $table->string('client_uid');
            $table->string('uparticipant_client_id');
            $table->string('whole_amount_without_discount');
            $table->string('client_name');
            $table->boolean('use_additional_bonus');
            $table->string('cashier');
            $table->string('cashier_type');
            $table->string('discount_code');
            $table->string('accumulated_points');
            $table->boolean('operation_registered_on_server');
            $table->string('full_server_response_as_result_of_payment');
            $table->integer('calculated_interest_discounts');
            $table->string('additional_bonus_calculation');
            $table->string('redeemable_points');
            $table->string('amount_without_discounts');
            $table->string('additional_accrual_amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_checker_sova_uds');
    }
};
