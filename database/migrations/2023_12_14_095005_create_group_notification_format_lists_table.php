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
        Schema::create('group_notification_format_list', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('group_id')->nullable()->default(null);
            $table->bigInteger('notification_format_id')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_notification_format_list');
    }
};
