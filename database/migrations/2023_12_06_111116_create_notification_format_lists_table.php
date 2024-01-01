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
        Schema::create('notification_format_list', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default(null);
            $table->longText('body')->nullable()->default(null);
            $table->string('updated_by')->nullable()->default(null);
            $table->string('created_by')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            $table->boolean('is_editable')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_format_list');
    }
};
