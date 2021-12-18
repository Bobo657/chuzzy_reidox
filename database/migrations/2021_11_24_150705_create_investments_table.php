<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('investment_id')->nullable();
            $table->string('plan_id')->nullable();
            $table->string('wallet_id')->nullable();
            $table->string('duration')->nullable();
            $table->string('payout')->nullable();
            $table->integer('amount')->nullable();
            $table->string('status')->default('pending');
            $table->string('profit')->default();
            $table->integer('interest')->default(0);
            $table->integer('compounding')->default(0);
            $table->string('compounding_status')->default(0);
            $table->date('comp_date')->nullable();
            $table->timestamps();

            // $table->foreign('wallet_id')
            //   ->references('id')->on('wallets')
            //   ->onDelete('cascade');

             $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
