<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('code');
            $table->string('shortname')->nullable();
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->text('input_description')->nullable();
            $table->unsignedInteger('is_norma')->default(0);
            $table->unsignedInteger('is_binary')->default(0);
            $table->unsignedBigInteger('norma_metric_id')->nullable();
            $table->foreign('norma_metric_id')->references('id')->on('metrics');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metrics');
    }
}
