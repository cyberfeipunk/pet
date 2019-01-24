<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatPetCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("pet_categories",function(Blueprint $table){
            $table->increments('id');
            $table->string('name',10)->comment('宠物类型');
            $table->integer('parent_cat')->nullable()->comment('父类');
            $table->integer('sort')->comment('排序');
            $table->timestamps();
        });
        DB::statement("ALERT TABLE `pet_categories` comment '宠物类型表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("pet_categories");

    }
}
