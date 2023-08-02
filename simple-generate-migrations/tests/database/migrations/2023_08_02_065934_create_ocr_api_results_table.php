<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcrApiResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocr_api_results', function (Blueprint $table) {
            $table->integer('ocr_id')->nullable()->comment("OCR結果ID");
            $table->string('description')->nullable()->comment("文字");
            $table->integer('vertex_min_x')->nullable()->comment("エリア開始X");
            $table->integer('vertex_min_y')->nullable()->comment("エリア開始Y");
            $table->integer('vertex_max_x')->nullable()->comment("エリア終了X");
            $table->integer('vertex_max_y')->nullable()->comment("エリア終了Y");
            $table->integer('page_number')->nullable()->comment("ページ番号");
            $table->dateTime('deleted_at')->nullable()->comment("DELETED_AT");
            $table->timestamps()->comment("CREATED_AT");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocr_api_results');
    }
}
