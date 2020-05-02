<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('Problem_description');
            $table->string('reamrks');
            $table->ipAddress('ip_address');
            $table->string('serial_no');
            $table->biginteger('subproblem_id')->unsigned();
            $table->foreign('subproblem_id')->references('id')->on('subproblem');
            $table->biginteger('problem_id')->unsigned();
            $table->foreign('problem_id')->references('id')->on('problem');
            $table->biginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();  
        
    });
    DB::statement("ALTER TABLE tickets AUTO_INCREMENT = 20200;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
