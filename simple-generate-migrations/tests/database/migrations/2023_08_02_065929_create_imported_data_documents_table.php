<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportedDataDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imported_data_documents', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->integer('importer_user_id')->nullable()->comment("登録ユーザーID");
            $table->integer('document_type_id')->nullable()->comment("書類タイプID");
            $table->integer('total_page')->nullable()->comment("総ページ");
            $table->integer('distributor_user_id')->nullable()->comment("振分け担当ユーザーID");
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
        Schema::dropIfExists('imported_data_documents');
    }
}
