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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->integer('role')->nullable();
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('subject');
            $table->string('merit')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('salary')->nullable();
            $table->string('days_per_week')->nullable();
            $table->string('tutor_gender')->nullable();
            $table->string('additional_info')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
