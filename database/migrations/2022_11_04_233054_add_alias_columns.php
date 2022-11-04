<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAliasColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('demo_categories', function($table) {
            $table->string('alias')->after('lang')->default('test');
        });

        Schema::table('demo_articles', function($table) {
            $table->string('alias')->after('lang')->default('test');
        });

        Schema::table('demo_posts', function($table) {
            $table->string('alias')->after('lang')->default('test');
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
            $table->string('alias');
        });

        Schema::table('demo_articles', function($table) {
            $table->string('alias');
        });

        Schema::table('demo_posts', function($table) {
            $table->string('alias');
        });
    }
}
