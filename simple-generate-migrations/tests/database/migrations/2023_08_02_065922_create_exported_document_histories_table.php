<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportedDocumentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exported_document_histories', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->integer('export_format_document_id')->nullable()->comment("出力定義書類ID");
            $table->integer('exported_data_document_id')->nullable()->comment("出力データ書類ID");
            $table->mediumText('export_condition_text')->nullable()->comment("出力条件テキスト");
            $table->dateTime('export_datetime')->useCurrent()->comment("出力日時");
            $table->integer('exporter_user_id')->comment("出力ユーザーID");
            $table->string('result_type')->nullable()->comment("結果種別");
            $table->mediumText('result_message')->nullable()->comment("結果メッセージ");
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
        Schema::dropIfExists('exported_document_histories');
    }
}
