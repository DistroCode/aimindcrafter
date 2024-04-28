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
        Schema::table('payments', function (Blueprint $table) {
            $table->string('billing_first_name')->nullable();
            $table->string('billing_last_name')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_postal_code')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_vat_number')->nullable();
            $table->text('billing_address')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('billing_first_name');
            $table->dropColumn('billing_last_name');
            $table->dropColumn('billing_email');
            $table->dropColumn('billing_phone');
            $table->dropColumn('billing_city');
            $table->dropColumn('billing_postal_code');
            $table->dropColumn('billing_country');
            $table->dropColumn('billing_vat_number');
            $table->dropColumn('billing_address');
        });
    }
};
