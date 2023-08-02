<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportedDataItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imported_data_items', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('imported_data_document_id')->nullable()->comment("取込データ書類ID");
            $table->integer('imported_data_detail_id')->nullable()->comment("取込データ明細ID");
            $table->tinyInteger('item_type')->nullable()->comment("項目型");
            $table->string('item_name')->nullable()->comment("項目名");
            $table->string('value')->nullable()->comment("値");
            $table->date('date_value')->nullable()->comment("日付値");
            $table->integer('integer_value')->nullable()->comment("整数値");
            $table->tinyInteger('detail_line_number')->nullable()->comment("明細行番号");
            $table->boolean('page_number')->default(0)->comment("ページ番号");
            $table->mediumText('warning_message')->nullable()->comment("警告メッセージ");
            $table->integer('corrector_user_id')->nullable()->comment("修正ユーザーID");
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
        Schema::dropIfExists('imported_data_items');
    }
}
