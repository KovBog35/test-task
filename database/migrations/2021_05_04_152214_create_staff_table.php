<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
