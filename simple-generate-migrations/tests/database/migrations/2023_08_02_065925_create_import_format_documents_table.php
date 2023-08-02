<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportFormatDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_format_documents', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->integer('document_type_id')->comment("書類タイプID");
            $table->string('name')->nullable()->comment("名称");
            $table->string('remark', 1024)->nullable()->comment("備考");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('import_format_documents');
    }
}
