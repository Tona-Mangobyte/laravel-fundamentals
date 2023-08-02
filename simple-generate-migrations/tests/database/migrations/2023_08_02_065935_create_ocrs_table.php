<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ocrs', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->mediumText('ocr_result')->comment("OCR結果テキスト");
            $table->integer('total_page')->nullable()->comment("総ページ");
            $table->dateTime('datetime')->nullable()->comment("DATETIME");
            $table->integer('deleted_at')->nullable()->comment("DELETED_AT");
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
        Schema::dropIfExists('ocrs');
    }
}
