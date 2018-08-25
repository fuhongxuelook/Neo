<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('name',100)->default('')->comment('中文名');
            $table->string('tag',50)->default('')->comment('标签');
            $table->char('image_id',20)->default('')->comment('图片id');
            $table->char('thumb_id',20)->default('')->comment('缩略图id');
            $table->decimal('price',7,2)->default(1.00)->comment('价格');
            $table->string('author',50)->default('')->comment('作者');
            $table->string('description',255)->default('')->comment('描述');
            $table->tinyInteger('status')->default(0)->comment('状态');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
