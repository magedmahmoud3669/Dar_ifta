<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
         //   First name (required), last name (required), Company (foreign key to Companies), email, phone number
            $table->string('Firstname');
            $table->string('lastname');
            $table->unsignedBigInteger('Company')->nullable();
            $table->string('email');
            $table->string('phonenumber');
            $table->foreign('company')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('employes');
    }
}
