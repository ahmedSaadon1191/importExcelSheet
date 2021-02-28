<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsvCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csv_customers', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('social_number')->nullable();
            $table->text('phone')->nullable();
            $table->text('job')->nullable();
            $table->text('going_date');
            $table->text('response')->nullable();
            $table->text('start_permit');
            $table->text('end_permit');
            $table->text('notes')->nullable();

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
        Schema::dropIfExists('csv_customers');
    }
}
