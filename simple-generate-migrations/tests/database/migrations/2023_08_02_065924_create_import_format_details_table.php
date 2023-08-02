<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportFormatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_format_details', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('import_format_document_id')->nullable()->comment("取込定義書類ID");
            $table->string('detail_name')->nullable()->comment("明細名");
            $table->integer('max_line_number')->default(50)->comment("最大行数");
            $table->integer('vertex_min_x')->nullable()->comment("エリア開始X");
            $table->integer('vertex_min_y')->nullable()->comment("エリア開始Y");
            $table->integer('vertex_max_x')->nullable()->comment("エリア終了X");
            $table->integer('vertex_max_y')->nullable()->comment("エリア終了Y");
            $table->integer('target_page')->nullable()->comment("対象ページ");
            $table->integer('row_hight')->nullable()->comment("行高");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_format_details');
    }
}
