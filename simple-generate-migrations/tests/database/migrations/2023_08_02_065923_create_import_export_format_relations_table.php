<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportExportFormatRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_export_format_relations', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('import_format_document_id')->nullable()->comment("取込定義書類ID");
            $table->integer('export_format_document_id')->nullable()->comment("出力定義書類ID");
            $table->string('remark')->nullable()->comment("備考");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_export_format_relations');
    }
}
