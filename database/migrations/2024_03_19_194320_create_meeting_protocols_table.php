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
        Schema::create('meeting_protocols', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('meeting_id');
            $table->string('headline');
            $table->text('protocol_text');
            $table->timestamp('starts_at');
            $table->timestamp('ends_at');
            $table->boolean('started')->default(false);
            $table->boolean('finished')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_protocols');
    }
};
