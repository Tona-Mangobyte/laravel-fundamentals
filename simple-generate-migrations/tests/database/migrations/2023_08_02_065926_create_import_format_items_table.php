<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportFormatItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_format_items', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('import_format_document_id')->comment("取込定義書類ID");
            $table->integer('import_format_detail_id')->default(0)->comment("取込定義明細ID");
            $table->tinyInteger('item_type')->nullable()->comment("項目型");
            $table->string('item_name')->nullable()->comment("項目名");
            $table->integer('vertex_min_x')->nullable()->comment("エリア開始X");
            $table->integer('vertex_min_y')->nullable()->comment("エリア開始Y");
            $table->integer('vertex_max_x')->nullable()->comment("エリア終了X");
            $table->integer('vertex_max_y')->nullable()->comment("エリア終了Y");
            $table->integer('detail_line_number')->default(0)->comment("明細行番号");
            $table->integer('target_page')->nullable()->comment("対象ページ");
            $table->tinyInteger('system_item_type')->nullable()->comment("システム項目区分");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_format_items');
    }
}
