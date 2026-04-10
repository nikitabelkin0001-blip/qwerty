<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users2', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->default(0);
            $table->integer('age')->default(20);
            $table->integer('salary');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
    });
    }

    public function down(): void
    {
         Schema::dropIfExists('users');
    }
};
