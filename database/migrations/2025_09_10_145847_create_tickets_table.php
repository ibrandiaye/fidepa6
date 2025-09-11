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
        $table->id();
        $table->string('nom');
          $table->string('prenom');
        $table->string('tel')->nullable();
        $table->string('email');
        $table->string('pays')->nullable();
        $table->string('code_unique')->unique();
        $table->string('qr_path')->nullable();
        $table->enum('status', ['valide', 'utilisé'])->default('valide');

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
        Schema::dropIfExists('tickets');
    }
}
