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
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id('bulletin_id');
            $table->string('bulletin_title');
            $table->string('bulletin_text');
            $table->binary('bulletin_picture');
            $table->date('bulletin_date');
            $table->foreignId('users')->constrained();
            //$table->foreignId('hosd_id')->constrained();
            // $table->foreignId('comm_id')->constrained();
            // $table->foreignId('coor_id')->constrained();
            // $table->foreignId('std_id')->constrained();
            // $table->foreignId('lecturer_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bulletins');
    }
};
