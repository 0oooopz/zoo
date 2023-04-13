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
        Schema::create('money_check', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref_key');
            $table->string('data_version');
            $table->string('number');
            $table->boolean('posted');
            $table->boolean('deleted');
            $table->dateTime('date');
            $table->string('currency_key');
            $table->string('discount_card_key');
            $table->string('bid');
            $table->string('card_key');
            $table->string('authorization_code');
            $table->string('comment');
            $table->integer('multiplicity');
            $table->integer('course');
            $table->string('mdlpid');
            $table->string('direction_movement');
            $table->boolean('do_not_transfer_cashier');
            $table->string('number_payment_card');
            $table->string('receipt_number');
            $table->string('object');
            $table->string('object_type');
            $table->boolean('round_total_cheque');
            $table->string('organization_key');
            $table->string('base');
            $table->string('base_type');
            $table->string('responsible_key');
            $table->boolean('send_email');
            $table->boolean('send_sms');
            $table->string('sub_report');
            $table->string('department_key');
            $table->integer('percent_manual_discounts_markups');
            $table->integer('change');
            $table->string('taxation_system');
            $table->integer('discount');
            $table->integer('rounding_method_total_check');
            $table->string('reference_number');
            $table->string('reference_number_foundations');

            $table->boolean('delete_between_organization');
            $table->string('delete_organization_recipient_key');
            $table->string('uid_payment');
            $table->string('uid_payment_1c');
            $table->string('specified_email');
            $table->string('specified_phone');
            $table->string('fiscal_check_number');
            $table->boolean('electronically');
            $table->string('invoice_key');
            $table->boolean('verified');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_check');
    }
};
