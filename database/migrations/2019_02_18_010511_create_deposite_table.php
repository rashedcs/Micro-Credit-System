<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposite', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('branch');
            $table->integer('year');
            $table->integer('month');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
    php artisan migrate --path=/database/migrations/deposite
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposite');
    }
}
