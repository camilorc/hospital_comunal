<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Agregamos la columna profile a la table users.
        Schema::table('users', function (Blueprint $table) {
            $table->integer('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Quitamos la columna
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['profile']);
        });
    }
}
