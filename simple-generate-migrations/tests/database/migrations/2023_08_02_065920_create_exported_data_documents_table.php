<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportedDataDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exported_data_documents', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
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
        Schema::dropIfExists('exported_data_documents');
    }
}
