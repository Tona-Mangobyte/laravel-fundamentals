<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportedDataDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exported_data_details', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('exported_data_document_id')->nullable()->comment("出力データ書類ID");
            $table->string('detail_name')->nullable()->comment("明細名");
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
        Schema::dropIfExists('exported_data_details');
    }
}
