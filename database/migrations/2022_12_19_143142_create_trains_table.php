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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 50);
            $table->string('st_start', 100);
            $table->string('st_arrive', 100);
            $table->time('time_start');
            $table->time('time_arrive');
            $table->string('code_train');
            $table->smallInteger('wagons');
            $table->tinyInteger('on_hour')->unsigned()->default(1);
            $table->tinyInteger('cancel')->unsigned()->default(0);
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
        Schema::dropIfExists('trains');
    }
};
