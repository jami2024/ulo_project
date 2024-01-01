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
        Schema::create('recipient_list', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('address')->nullable()->default(null);
            $table->integer('phone')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('username')->nullable()->default(null);
            $table->string('holding_no')->nullable()->default(null);
            $table->integer('due_amount')->nullable()->default(null);
            $table->integer('due_year')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipient_list');
    }
};
