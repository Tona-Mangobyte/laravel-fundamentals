<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnedStringConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learned_string_conversions', function (Blueprint $table) {
            $table->id()->comment("id");
            $table->integer('import_format_item_id')->nullable()->comment("取込定義項目ID");
            $table->integer('imported_data_item_id')->nullable()->comment("取込データ項目ID");
            $table->string('before_value')->nullable()->comment("変換前");
            $table->string('after_value')->nullable()->comment("変換後");
            $table->integer('register_user_id')->nullable()->comment("登録者ID");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learned_string_conversions');
    }
}
