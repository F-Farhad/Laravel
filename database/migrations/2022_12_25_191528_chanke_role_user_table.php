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
    public function up(){
        Schema::table('role_user', function(Blueprint $table){
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('role_user', function(Blueprint $table){
            $table->dateTime('created_at')->default(date("Y-m-d H:i:s"));
            $table->dateTime('updated_at')->default(date("Y-m-d H:i:s"));
        });
    }
};
