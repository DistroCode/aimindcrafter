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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('email_opt_in')->default(true);
            $table->integer('gpt_3_turbo_credits')->default(0);
            $table->integer('gpt_4_turbo_credits')->default(0);
            $table->integer('gpt_4_credits')->default(0);
            $table->integer('claude_3_opus_credits')->default(0);
            $table->integer('claude_3_sonnet_credits')->default(0);
            $table->integer('claude_3_haiku_credits')->default(0);
            $table->integer('fine_tune_credits')->default(0);
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('email_opt_in');
            $table->dropColumn('gpt_3_turbo_credits');
            $table->dropColumn('gpt_4_turbo_credits');
            $table->dropColumn('gpt_4_credits');
            $table->dropColumn('claude_3_credits');
            $table->dropColumn('fine_tune_credits');
            $table->dropColumn('gpt_3_turbo_credits_prepaid');
            $table->dropColumn('gpt_4_turbo_credits_prepaid');
            $table->dropColumn('gpt_4_credits_prepaid');
            $table->dropColumn('claude_3_credits_prepaid');
            $table->dropColumn('fine_tune_credits_prepaid');
        });
    }
};
