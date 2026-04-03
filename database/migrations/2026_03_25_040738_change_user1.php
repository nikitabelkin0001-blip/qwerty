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
        Schema::table('users1', function (Blueprint $table) {
            $table->string('DateOfCreationUser');
            $table->integer('age')->nullable()->unsigned();
            $table->string('email')->comment('this email');
            $table->integer('salary')->default('0');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {    Schema::table('users1', function (Blueprint $table) {
         $table->dropColumn(['DateOfCreationUser','age','email','salary']);
    });
    }
};
