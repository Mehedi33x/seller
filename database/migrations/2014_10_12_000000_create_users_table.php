<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 50)->nullable();
            $table->string('user_email')->unique();
            $table->string('user_contact', 30);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password');
            $table->string('user_address', 100)->nullable();
            $table->string('user_role')->default('customer');
            $table->rememberToken();
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
};