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
        Schema::table('prepaid_plans', function (Blueprint $table) {
            $table->integer('gpt_3_turbo_credits_prepaid')->default(0);
            $table->integer('gpt_4_turbo_credits_prepaid')->default(0);
            $table->integer('gpt_4_credits_prepaid')->default(0);
            $table->integer('claude_3_opus_credits_prepaid')->default(0);
            $table->integer('claude_3_sonnet_credits_prepaid')->default(0);
            $table->integer('claude_3_haiku_credits_prepaid')->default(0);
            $table->integer('fine_tune_credits_prepaid')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prepaid_plans', function (Blueprint $table) {
            $table->dropColumn('gpt_3_turbo_credits_prepaid');
            $table->dropColumn('gpt_4_turbo_credits_prepaid');
            $table->dropColumn('gpt_4_credits_prepaid');
            $table->dropColumn('claude_3_opus_credits_prepaid');
            $table->dropColumn('claude_3_sonnet_credits_prepaid');
            $table->dropColumn('claude_3_haiku_credits_prepaid');
            $table->dropColumn('fine_tune_credits_prepaid');
        });
    }
};
