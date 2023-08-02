<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportedDocumentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imported_document_histories', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->integer('import_format_document_id')->nullable()->comment("取込定義書類ID");
            $table->integer('imported_data_document_id')->nullable()->comment("取込データ書類ID");
            $table->integer('exported_document_history_id')->nullable()->comment("出力書類履歴ID");
            $table->integer('import_document_file_id')->nullable()->comment("取込書類ファイルID");
            $table->integer('ocr_id')->nullable()->comment("OCR結果ID");
            $table->tinyInteger('import_way')->nullable()->comment("取込方法");
            $table->dateTime('import_datetime')->useCurrent()->comment("取込日時");
            $table->integer('importer_user_id')->nullable()->comment("取込ユーザー");
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
        Schema::dropIfExists('imported_document_histories');
    }
}
