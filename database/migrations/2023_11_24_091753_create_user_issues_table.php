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
        Schema::create('user_issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('end_user_id');
            $table->unsignedBigInteger('service_type_id');
            $table->unsignedBigInteger('issue_source_id');
            $table->unsignedBigInteger('issue_product_id');
            $table->unsignedBigInteger('issue_type_id');
            $table->unsignedBigInteger('issue_status_id');

            $table->string('description')->nullable();
            $table->string('root_cause')->nullable();
            $table->string('resolution')->nullable();

            $table->foreign('end_user_id')->references('id')->on('end_users');
            $table->foreign('service_type_id')->references('id')->on('service_types');
            $table->foreign('issue_source_id')->references('id')->on('issue_sources');
            $table->foreign('issue_product_id')->references('id')->on('issue_products');
            $table->foreign('issue_type_id')->references('id')->on('issue_types');
            $table->foreign('issue_status_id')->references('id')->on('issue_statuses');

            $table->softDeletes($column = 'deleted_at', $precision = 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_issues');
    }
};
