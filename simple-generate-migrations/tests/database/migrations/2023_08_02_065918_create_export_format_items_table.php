<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportFormatItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_format_items', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('export_format_document_id')->nullable()->comment("出力定義書類ID");
            $table->integer('export_format_detail_id')->nullable()->comment("出力定義明細ID");
            $table->string('imported_data_item_name')->nullable()->comment("取込データ項目名");
            $table->string('item_name')->nullable()->comment("項目名");
            $table->smallInteger('item_index')->nullable()->comment("項目番号");
            $table->boolean('search_target_type')->default(0)->comment("検索対象タイプ");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('export_format_items');
    }
}
