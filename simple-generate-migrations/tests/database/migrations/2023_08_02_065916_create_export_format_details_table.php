<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportFormatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_format_details', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('export_format_document_id')->nullable()->comment("出力定義書類ID");
            $table->string('imported_data_detail_name')->nullable()->comment("取込データ明細名");
            $table->string('detail_name')->nullable()->comment("明細名");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('export_format_details');
    }
}
