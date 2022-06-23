<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->date("check_in");
            $table->date("check_out");
            $table->string("name", 100)->nullable();
            $table->string("email", 100)->nullable();
            $table->string("phone", 50)->nullable();
            $table->enum("status", [1, 2])->default(1); // 1 = Réservé & 2 = Occupé
            $table->boolean("is_accepted")->default(false);
            $table->boolean("is_available")->default(true);
            $table->integer("guest")->default(1);
            $table->unsignedInteger("room_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
