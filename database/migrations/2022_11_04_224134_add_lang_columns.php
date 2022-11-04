<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLangColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demo_categories', function($table) {
            $table->string('lang')->after('order')->default('tw');
        });

        Schema::table('demo_articles', function($table) {
            $table->string('lang')->after('order')->default('tw');
        });

        Schema::table('demo_posts', function($table) {
            $table->string('lang')->after('id')->default('tw');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('demo_categories', function($table) {
            $table->dropColumn('lang');
        });

        Schema::table('demo_articles', function($table) {
            $table->dropColumn('lang');
        });

        Schema::table('demo_posts', function($table) {
            $table->dropColumn('lang');
        });
    }
}
