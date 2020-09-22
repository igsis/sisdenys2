<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('emailAlternativo')->unique()->after('email');
            $table->string('rf')->unique()->after('name');
            $table->index(['rf']);
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

            $table->dropIndex(['rf']);

            $table->dropColumn('rf');
            $table->dropColumn('emailAlternativo');
        });
    }
}
