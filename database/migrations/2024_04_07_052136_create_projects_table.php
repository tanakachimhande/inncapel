<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('project_category');
            $table->string('project_image_path');
            $table->string('project_name');
            $table->string('client_name');
            $table->string('project_problem');
            $table->string('project_solution');
            $table->string('project_url');
            $table->timestamps();

            $table->foreign('category_id')
            ->references('id')
            ->on('service_categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
