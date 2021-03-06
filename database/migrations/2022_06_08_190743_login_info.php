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
        Schema::create('logininfos', function(Blueprint $table){
            {
                $table->bigInteger('user_id')->unsigned()->index()->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamp('logged_in_at');
                $table->timestamp('logged_out_at')->nullable();
                
            };
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logininfos');
    }
};
