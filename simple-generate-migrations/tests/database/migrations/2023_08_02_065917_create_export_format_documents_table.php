<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportFormatDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_format_documents', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->string('name')->nullable()->comment("定義名");
            $table->mediumText('remark')->nullable()->comment("備考");
            $table->integer('export_category')->nullable()->comment("出力種別");
            $table->integer('file_type')->nullable()->comment("ファイルタイプ");
            $table->string('api_host')->nullable()->comment("API接続先");
            $table->string('authentication_data_1')->nullable()->comment("認証情報1");
            $table->string('authentication_data_2')->nullable()->comment("認証情報2");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('export_format_documents');
    }
}
