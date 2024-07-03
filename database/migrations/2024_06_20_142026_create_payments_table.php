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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('user_id');
            $table->string('amount');
            $table->string('random_identity')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('api_status')->nullable();
            $table->string('tid')->nullable();
            $table->string('memo')->nullable();
            $table->string('msg')->nullable();
            $table->smallInteger('confirmed')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
