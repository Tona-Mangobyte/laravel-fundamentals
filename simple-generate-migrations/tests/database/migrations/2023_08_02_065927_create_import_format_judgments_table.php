<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportFormatJudgmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('import_format_judgments', function (Blueprint $table) {
            $table->integer('id')->primary()->comment("ID");
            $table->integer('company_id')->nullable()->comment("会社ID");
            $table->integer('import_format_document_id')->nullable()->comment("取込定義書類ID");
            $table->string('regexp_judgement_string1', 500)->nullable()->comment("正規表現判断文字1");
            $table->string('regexp_judgement_string2', 500)->nullable()->comment("正規表現判断文字2");
            $table->string('regexp_judgement_string3', 500)->nullable()->comment("正規表現判断文字3");
            $table->string('regexp_judgement_string4', 500)->nullable()->comment("正規表現判断文字4");
            $table->string('regexp_judgement_string5', 500)->nullable()->comment("正規表現判断文字5");
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
        Schema::dropIfExists('import_format_judgments');
    }
}
