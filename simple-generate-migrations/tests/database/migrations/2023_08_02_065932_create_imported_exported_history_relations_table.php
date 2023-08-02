<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportedExportedHistoryRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imported_exported_history_relations', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('imported_document_history_id')->nullable()->comment("取込書類履歴ID");
            $table->integer('exported_document_history_id')->nullable()->comment("出力書類履歴ID");
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
        Schema::dropIfExists('imported_exported_history_relations');
    }
}
