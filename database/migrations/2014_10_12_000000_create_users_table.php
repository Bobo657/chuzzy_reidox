<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('country');
            $table->integer('code');
            $table->boolean('status')->default(1);
            $table->integer('referral_profit')->default(0);
            $table->integer('c_profit')->default(0);
            $table->integer('non_profit')->default(0);
            $table->integer('capital')->default(0);
            $table->string('role')->default('user');
            $table->integer('ref_id')->nullable();
            $table->string('passport')->nullable();
            $table->string('idback')->nullable();
            $table->string('idfront')->nullable();
            $table->string('photo')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
