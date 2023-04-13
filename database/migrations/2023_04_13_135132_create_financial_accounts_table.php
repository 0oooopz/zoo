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
        Schema::create('financial_accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('money_check_id')
                ->constrained('money_check')
                ->onDelete('cascade');
            $table->string('financial_account');
            $table->string('type');
            $table->string('account_credit_key');
            $table->string('discount_card_key');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_accounts');
    }
};
