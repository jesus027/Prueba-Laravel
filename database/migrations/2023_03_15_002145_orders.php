<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('ordersdetails_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();

            $table->float('num_orden');
            $table->date('fecha');
            $table->float('monto');
            $table->string('estado');
            $table->timestamps();

            $table->foreign('ordersdetails_id')->references('id')->on('ordersdetails')->onDelete("cascade");
            $table->foreign('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
