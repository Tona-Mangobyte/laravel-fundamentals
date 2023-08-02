<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportedDataItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exported_data_items', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('exported_data_document_id')->nullable()->comment("出力データ書類ID");
            $table->integer('exported_data_detail_id')->nullable()->comment("出力データ明細ID");
            $table->integer('page_number')->nullable()->comment("ページ番号");
            $table->integer('detail_line_number')->nullable()->comment("明細行番号");
            $table->smallInteger('item_index')->nullable()->comment("項目番号");
            $table->tinyInteger('item_type')->nullable()->comment("項目型");
            $table->string('item_name')->nullable()->comment("項目名");
            $table->string('value')->nullable()->comment("値");
            $table->date('date_value')->nullable()->comment("日付値");
            $table->integer('integer_value')->nullable()->comment("整数値");
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
        Schema::dropIfExists('exported_data_items');
    }
}
