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
        Schema::create('notification_recipient_list', function (Blueprint $table) {
            $table->id();
            $table->integer('notification_id')->nullable()->default(null);
            $table->integer('recipient_id')->nullable()->default(null);
            $table->longText('content')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
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
        Schema::dropIfExists('notification_recipient_list');
    }
};
