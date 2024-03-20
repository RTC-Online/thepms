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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('project_id');
            $table->integer('ticket_type_id');
            $table->integer('ticket_category_id');
            $table->integer('ticket_status_id');
            $table->text('description');
            $table->timestamp('deadline');
            $table->string('difficulty');
            $table->string('priority');
            $table->integer('assigne_id');
            $table->float('guess_effort');
            $table->float('calc_effort');
            $table->integer('leader_id');
            $table->boolean('activated')->default(false);
            $table->boolean('suspended')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
