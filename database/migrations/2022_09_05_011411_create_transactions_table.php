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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('value')->default(0);
            $table->date('date');
            $table->string('name');
            $table->string('observation');

            $table->foreignId('category_id')
                ->constrained()
                ->nullOnDelete();
                
            $table->foreignId('wallet_id')
                ->constrained()
                ->nullOnDelete();


            // observation
            // category_id (fk)
            // wallet_id (fk)


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
